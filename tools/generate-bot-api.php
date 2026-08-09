<?php

declare(strict_types=1);

const BOT_API_VERSION = '10.2';
const BOT_API_URL = 'https://core.telegram.org/bots/api';

/** @return never */
function fail(string $message): void
{
    fwrite(STDERR, $message.PHP_EOL);
    exit(1);
}

function normalizeText(string $text): string
{
    $decoded = html_entity_decode($text, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $normalized = preg_replace('/\s+/u', ' ', $decoded);

    return trim(is_string($normalized) ? $normalized : $decoded);
}

function innerHtml(DOMNode $node): string
{
    $document = $node->ownerDocument;
    if (! $document instanceof DOMDocument) {
        return '';
    }

    $html = '';
    foreach ($node->childNodes as $child) {
        $fragment = $document->saveHTML($child);
        if (is_string($fragment)) {
            $html .= $fragment;
        }
    }

    return $html;
}

/** @return list<DOMElement> */
function followingSectionElements(DOMElement $heading): array
{
    $elements = [];
    for ($node = $heading->nextSibling; $node !== null; $node = $node->nextSibling) {
        if (! $node instanceof DOMElement) {
            continue;
        }
        if (in_array(strtolower($node->tagName), ['h3', 'h4'], true)) {
            break;
        }
        $elements[] = $node;
    }

    return $elements;
}

/** @return list<string> */
function tableHeaders(DOMElement $table): array
{
    $headers = [];
    foreach ($table->getElementsByTagName('th') as $header) {
        $headers[] = normalizeText($header->textContent);
    }

    return $headers;
}

/** @return list<array{field: string, type: string, description: string, optional: bool}> */
function parseFields(DOMElement $table): array
{
    $fields = [];
    $bodies = $table->getElementsByTagName('tbody');
    if ($bodies->length === 0) {
        return [];
    }

    foreach ($bodies->item(0)?->childNodes ?? [] as $row) {
        if (! $row instanceof DOMElement || strtolower($row->tagName) !== 'tr') {
            continue;
        }
        $cells = $row->getElementsByTagName('td');
        if ($cells->length < 3) {
            continue;
        }
        $description = normalizeText($cells->item(2)?->textContent ?? '');
        $fields[] = [
            'field' => normalizeText($cells->item(0)?->textContent ?? ''),
            'type' => normalizeText($cells->item(1)?->textContent ?? ''),
            'description' => $description,
            'optional' => str_starts_with($description, 'Optional.'),
        ];
    }

    return $fields;
}

/** @return list<array{parameter: string, type: string, required: bool, description: string}> */
function parseParameters(DOMElement $table): array
{
    $parameters = [];
    $bodies = $table->getElementsByTagName('tbody');
    if ($bodies->length === 0) {
        return [];
    }

    foreach ($bodies->item(0)?->childNodes ?? [] as $row) {
        if (! $row instanceof DOMElement || strtolower($row->tagName) !== 'tr') {
            continue;
        }
        $cells = $row->getElementsByTagName('td');
        if ($cells->length < 4) {
            continue;
        }
        $parameters[] = [
            'parameter' => normalizeText($cells->item(0)?->textContent ?? ''),
            'type' => normalizeText($cells->item(1)?->textContent ?? ''),
            'required' => normalizeText($cells->item(2)?->textContent ?? '') === 'Yes',
            'description' => normalizeText($cells->item(3)?->textContent ?? ''),
        ];
    }

    return $parameters;
}

/** @param list<DOMElement> $elements */
function sectionDescription(array $elements): string
{
    $parts = [];
    foreach ($elements as $element) {
        if (strtolower($element->tagName) === 'table') {
            break;
        }
        if (in_array(strtolower($element->tagName), ['p', 'blockquote'], true)) {
            $text = normalizeText($element->textContent);
            if ($text !== '') {
                $parts[] = $text;
            }
        }
    }

    return implode("\n", $parts);
}

/** @param list<DOMElement> $elements
 * @return list<string>
 */
function unionVariants(array $elements): array
{
    $variants = [];
    foreach ($elements as $element) {
        if (strtolower($element->tagName) !== 'ul') {
            continue;
        }
        foreach ($element->getElementsByTagName('a') as $link) {
            $name = normalizeText($link->textContent);
            $href = $link->getAttribute('href');
            if ($name !== '' && str_starts_with($href, '#') && ctype_upper($name[0])) {
                $variants[] = $name;
            }
        }
    }

    return array_values(array_unique($variants));
}

/** @param array<string, mixed> $types */
function returnType(string $description, array $types): string
{
    $singleLine = str_replace("\n", ' ', $description);
    $phrase = null;

    if (preg_match('/On success, (.+?)(?:\.|$)/', $singleLine, $matches) === 1) {
        $phrase = normalizeText($matches[1]);
    } elseif (preg_match_all('/\bReturns\b (.+?)(?:\.|$)/', $singleLine, $matches) > 0) {
        $candidate = end($matches[1]);
        $phrase = normalizeText(is_string($candidate) ? $candidate : '');
    } elseif (preg_match('/\bWill return\b (.+?)(?:\.|$)/', $singleLine, $matches) === 1) {
        $phrase = normalizeText($matches[1]);
    }

    if (! is_string($phrase) || $phrase === '') {
        return 'Mixed';
    }

    $found = [];
    if (preg_match('/Array of ([A-Z][A-Za-z0-9_]*)/', $phrase, $arrayMatch) === 1) {
        return 'Array of '.$arrayMatch[1];
    }

    foreach (array_keys($types) as $type) {
        if (preg_match('/\b'.preg_quote($type, '/').'\b/', $phrase) === 1) {
            $found[] = $type;
        }
    }

    if (preg_match('/\bTrue\b/', $phrase) === 1) {
        $found[] = 'Boolean';
    }
    if (preg_match('/\bInteger\b/', $phrase) === 1) {
        $found[] = 'Integer';
    }
    if (preg_match('/\bString\b/', $phrase) === 1) {
        $found[] = 'String';
    }

    $found = array_values(array_unique($found));
    if ($found !== []) {
        return implode(' or ', $found);
    }

    return $phrase;
}

function camelCase(string $value): string
{
    $parts = explode('_', $value);
    $first = array_shift($parts) ?? '';

    return $first.implode('', array_map(static fn (string $part): string => ucfirst($part), $parts));
}

function normalizeUnionSyntax(string $type): string
{
    $normalized = preg_replace('/,\s*|\s+and\s+/', ' or ', $type);

    return is_string($normalized) ? $normalized : $type;
}

/** @return list<string> */
function rawUnionParts(string $type): array
{
    $parts = preg_split('/\s+or\s+/', normalizeUnionSyntax($type));

    return array_values(array_filter(array_map('trim', is_array($parts) ? $parts : [$type])));
}

/** @param array<string, list<string>> $unions */
function phpNamedType(string $type, bool $fullyQualified, array $unions = []): string
{
    if (isset($unions[$type])) {
        return implode('|', array_map(
            static fn (string $variant): string => phpNamedType($variant, $fullyQualified),
            $unions[$type],
        ));
    }

    return match ($type) {
        'Mixed' => 'mixed',
        'Integer' => 'int',
        'Float' => 'float',
        'Boolean', 'True' => 'bool',
        'String' => 'string',
        'InputFile' => '\\Cnx\\LaravelTelegram\\BotApi\\InputFile',
        default => $fullyQualified
            ? '\\Cnx\\LaravelTelegram\\BotApi\\Generated\\Types\\'.$type
            : $type,
    };
}

/** @param array<string, list<string>> $unions */
function phpType(string $type, bool $optional, bool $fullyQualified, array $unions = []): string
{
    if (str_starts_with($type, 'Array of ')) {
        $result = 'array';
    } else {
        $parts = array_map(
            static fn (string $part): string => phpNamedType($part, $fullyQualified, $unions),
            rawUnionParts($type),
        );
        $parts = array_values(array_unique(explode('|', implode('|', $parts))));
        $result = implode('|', $parts);
    }

    if ($optional && $result !== 'mixed') {
        $parts = explode('|', $result);
        $parts[] = 'null';
        $result = implode('|', array_values(array_unique($parts)));
    }

    return $result;
}

/** @param array<string, list<string>> $unions */
function phpDocType(string $type, bool $fullyQualified, array $unions = []): string
{
    if (! str_starts_with($type, 'Array of ')) {
        return phpType($type, false, $fullyQualified, $unions);
    }

    $itemType = substr($type, strlen('Array of '));

    return 'list<'.phpDocType(normalizeUnionSyntax($itemType), $fullyQualified, $unions).'>';
}

/** @param array{type: string, description: string} $field */
function inputAwareType(array $field): string
{
    if ($field['type'] === 'String' && str_contains($field['description'], 'attach://')) {
        return 'String or InputFile';
    }

    return $field['type'];
}

/**
 * @param  list<array{field: string, type: string, description: string, optional: bool}>  $fields
 * @return array<string, scalar>
 */
function fixedFields(array $fields): array
{
    $fixed = [];
    foreach ($fields as $field) {
        if (preg_match(
            '/\b(?:always|must be)\s+(?:[“"]([A-Za-z0-9_]+)[”"]|([A-Za-z0-9_]+))(?=[.,;]|$)/iu',
            $field['description'],
            $matches,
        ) === 1) {
            $value = $matches[1] !== '' ? $matches[1] : $matches[2];
            $fixed[$field['field']] = match (true) {
                $field['type'] === 'Integer' && ctype_digit($value) => (int) $value,
                in_array($field['type'], ['Boolean', 'True'], true) && strcasecmp($value, 'true') === 0 => true,
                in_array($field['type'], ['Boolean', 'True'], true) && strcasecmp($value, 'false') === 0 => false,
                default => $value,
            };
        }
    }

    return $fixed;
}

/** @param array<string, array{property: string, type: string, optional: bool}> $definitions */
function renderDefinitions(array $definitions): string
{
    if ($definitions === []) {
        return '[]';
    }

    $lines = ['['];
    foreach ($definitions as $field => $definition) {
        $lines[] = sprintf(
            "        %s => ['property' => %s, 'type' => %s, 'optional' => %s],",
            var_export($field, true),
            var_export($definition['property'], true),
            var_export($definition['type'], true),
            $definition['optional'] ? 'true' : 'false',
        );
    }
    $lines[] = '    ]';

    return implode("\n", $lines);
}

/** @param array<string, scalar> $fixed */
function renderFixedFields(array $fixed): string
{
    if ($fixed === []) {
        return '[]';
    }

    $lines = ['['];
    foreach ($fixed as $field => $value) {
        $lines[] = sprintf('        %s => %s,', var_export($field, true), var_export($value, true));
    }
    $lines[] = '    ]';

    return implode("\n", $lines);
}

/**
 * @param  list<array{field: string, type: string, description: string, optional: bool}>  $fields
 * @param  array<string, list<string>>  $unions
 * @return array{definitions: array<string, array{property: string, type: string, optional: bool}>, constructor: string}
 */
function renderTypeFields(array $fields, bool $fullyQualified, array $unions): array
{
    $definitions = [];
    foreach ($fields as $field) {
        $definitions[$field['field']] = [
            'property' => camelCase($field['field']),
            'type' => $field['type'],
            'optional' => $field['optional'],
        ];
    }

    if ($fields === []) {
        return ['definitions' => $definitions, 'constructor' => "    public function __construct() {}\n"];
    }

    usort($fields, static fn (array $left, array $right): int => $left['optional'] <=> $right['optional']);
    $docLines = [];
    foreach ($fields as $field) {
        if (str_starts_with($field['type'], 'Array of ')) {
            $docLines[] = sprintf(
                '     * @param %s%s $%s',
                phpDocType(inputAwareType($field), $fullyQualified, $unions),
                $field['optional'] ? '|null' : '',
                camelCase($field['field']),
            );
        }
    }

    $constructor = '';
    if ($docLines !== []) {
        $constructor .= "    /**\n".implode("\n", $docLines)."\n     */\n";
    }
    $constructor .= "    public function __construct(\n";
    foreach ($fields as $field) {
        $constructor .= sprintf(
            "        public readonly %s \$%s%s,\n",
            phpType(inputAwareType($field), $field['optional'], $fullyQualified, $unions),
            camelCase($field['field']),
            $field['optional'] ? ' = null' : '',
        );
    }
    $constructor .= "    ) {}\n";

    return ['definitions' => $definitions, 'constructor' => $constructor];
}

/**
 * @param  array<string, array{anchor: string, description: string, kind: string, fields: list<array{field: string, type: string, description: string, optional: bool}>, variants: list<string>}>  $types
 * @return array<string, string>
 */
function renderTypes(array $types): array
{
    $variantParents = [];
    $unions = [];
    foreach ($types as $parent => $definition) {
        if ($definition['kind'] === 'union') {
            $unions[$parent] = $definition['variants'];
        }
        foreach ($definition['variants'] as $variant) {
            $variantParents[$variant] ??= $parent;
        }
    }

    $files = [];
    foreach ($types as $name => $definition) {
        if ($name === 'InputFile') {
            continue;
        }

        $parent = $variantParents[$name] ?? 'Type';
        $extends = $parent === 'Type' ? 'Type' : $parent;
        $use = "use Cnx\\LaravelTelegram\\BotApi\\Type;\n\n";
        if ($definition['kind'] === 'union') {
            $variants = implode(",\n", array_map(
                static fn (string $variant): string => "        {$variant}::class",
                $definition['variants'],
            ));
            $body = "    /** @var list<class-string<Type>> */\n"
                ."    protected const VARIANTS = [\n{$variants},\n    ];\n";
            $files[$name.'.php'] = "<?php\n\ndeclare(strict_types=1);\n\nnamespace Cnx\\LaravelTelegram\\BotApi\\Generated\\Types;\n\n"
                .$use
                .'/** @generated from Telegram Bot API '.BOT_API_VERSION." */\n"
                ."abstract class {$name} extends {$extends}\n{\n{$body}}\n";

            continue;
        }

        $rendered = renderTypeFields($definition['fields'], false, $unions);
        $fixed = fixedFields($definition['fields']);
        $body = "    /** @var array<string, array{property: string, type: string, optional: bool}> */\n"
            .'    protected const FIELDS = '.renderDefinitions($rendered['definitions']).";\n";
        if ($fixed !== []) {
            $body .= "\n    /** @var array<string, scalar> */\n"
                .'    protected const FIXED_FIELDS = '.renderFixedFields($fixed).";\n";
        }
        $body .= "\n".$rendered['constructor'];

        $files[$name.'.php'] = "<?php\n\ndeclare(strict_types=1);\n\nnamespace Cnx\\LaravelTelegram\\BotApi\\Generated\\Types;\n\n"
            .$use
            .'/** @generated from Telegram Bot API '.BOT_API_VERSION." */\n"
            ."final class {$name} extends {$extends}\n{\n{$body}}\n";
    }

    return $files;
}

/**
 * @param  array<string, array{anchor: string, description: string, return_type: string, parameters: list<array{parameter: string, type: string, required: bool, description: string}>}>  $methods
 * @return array<string, string>
 */
function renderRequests(array $methods, array $types): array
{
    $unions = [];
    foreach ($types as $name => $definition) {
        if ($definition['kind'] === 'union') {
            $unions[$name] = $definition['variants'];
        }
    }

    $files = [];
    foreach ($methods as $method => $definition) {
        $class = ucfirst($method).'Request';
        $fields = array_map(
            static fn (array $parameter): array => [
                'field' => $parameter['parameter'],
                'type' => $parameter['type'],
                'description' => $parameter['description'],
                'optional' => ! $parameter['required'],
            ],
            $definition['parameters'],
        );
        $rendered = renderTypeFields($fields, true, $unions);
        $body = '    protected const METHOD = '.var_export($method, true).";\n\n"
            .'    protected const RETURN_TYPE = '.var_export($definition['return_type'], true).";\n\n"
            ."    /** @var array<string, array{property: string, type: string, optional: bool}> */\n"
            .'    protected const FIELDS = '.renderDefinitions($rendered['definitions']).";\n\n"
            .$rendered['constructor'];

        $files[$class.'.php'] = "<?php\n\ndeclare(strict_types=1);\n\nnamespace Cnx\\LaravelTelegram\\BotApi\\Generated\\Requests;\n\n"
            ."use Cnx\\LaravelTelegram\\BotApi\\Request;\n\n"
            .'/** @generated from Telegram Bot API '.BOT_API_VERSION." */\n"
            ."final class {$class} extends Request\n{\n{$body}}\n";
    }

    return $files;
}

/**
 * @param  array<string, array{anchor: string, description: string, return_type: string, parameters: list<array{parameter: string, type: string, required: bool, description: string}>}>  $methods
 * @param  array<string, array{kind: string, variants: list<string>}>  $types
 */
function renderMethodsTrait(array $methods, array $types): string
{
    $unions = [];
    foreach ($types as $name => $definition) {
        if ($definition['kind'] === 'union') {
            $unions[$name] = $definition['variants'];
        }
    }

    $body = '';
    foreach ($methods as $method => $definition) {
        $requestClass = ucfirst($method).'Request';
        $return = phpType($definition['return_type'], false, true, $unions);
        $doc = str_starts_with($definition['return_type'], 'Array of ')
            ? '    /** @return '.phpDocType($definition['return_type'], true, $unions)." */\n"
            : '';
        $required = array_filter(
            $definition['parameters'],
            static fn (array $parameter): bool => $parameter['required'],
        );

        if ($definition['parameters'] === []) {
            $signature = "public function {$method}(): {$return}";
            $request = "new Requests\\{$requestClass}";
        } elseif ($required === []) {
            $signature = "public function {$method}(?Requests\\{$requestClass} \$request = null): {$return}";
            $request = "\$request ?? new Requests\\{$requestClass}";
        } else {
            $signature = "public function {$method}(Requests\\{$requestClass} \$request): {$return}";
            $request = '$request';
        }

        $body .= $doc
            ."    {$signature}\n"
            ."    {\n"
            ."        \$result = \$this->execute({$request});\n";
        if ($return !== 'mixed') {
            $annotation = str_starts_with($definition['return_type'], 'Array of ')
                ? phpDocType($definition['return_type'], true, $unions)
                : $return;
            $body .= "        /** @var {$annotation} \$result */\n";
        }
        $body .= "\n        return \$result;\n    }\n\n";
    }

    return "<?php\n\ndeclare(strict_types=1);\n\nnamespace Cnx\\LaravelTelegram\\BotApi\\Generated;\n\n"
        .'/** @generated from Telegram Bot API '.BOT_API_VERSION." */\n"
        ."trait Methods\n{\n".rtrim($body)."\n}\n";
}

/**
 * @param  array<string, array{anchor: string, description: string, return_type: string, parameters: list<array{parameter: string, type: string, required: bool, description: string}>}>  $methods
 * @param  array<string, array{kind: string, variants: list<string>}>  $types
 */
function renderFacade(array $methods, array $types): string
{
    $unions = [];
    foreach ($types as $name => $definition) {
        if ($definition['kind'] === 'union') {
            $unions[$name] = $definition['variants'];
        }
    }

    $annotations = [
        ' * @method static \\Cnx\\LaravelTelegram\\BotApiClient bot(?string $botConfigName = null)',
        ' * @method static mixed execute(\\Cnx\\LaravelTelegram\\BotApi\\Request $request)',
        " * @method static mixed call(string \$method, array<string, mixed> \$parameters = [], string \$returnType = 'Mixed')",
    ];

    foreach ($methods as $method => $definition) {
        $request = '\\Cnx\\LaravelTelegram\\BotApi\\Generated\\Requests\\'.ucfirst($method).'Request';
        $return = phpDocType($definition['return_type'], true, $unions);
        $required = array_filter(
            $definition['parameters'],
            static fn (array $parameter): bool => $parameter['required'],
        );

        if ($definition['parameters'] === []) {
            $parameters = '';
        } elseif ($required === []) {
            $parameters = "?{$request} \$request = null";
        } else {
            $parameters = "{$request} \$request";
        }

        $annotations[] = " * @method static {$return} {$method}({$parameters})";
    }

    $doc = implode("\n", $annotations);

    return "<?php\n\ndeclare(strict_types=1);\n\nnamespace Cnx\\LaravelTelegram\\Facades;\n\n"
        ."use Cnx\\LaravelTelegram\\BotApiClient;\n"
        ."use Illuminate\\Support\\Facades\\Facade;\n\n"
        ."/**\n"
        .' * Telegram Bot API '.BOT_API_VERSION." facade.\n"
        ." *\n"
        ."{$doc}\n"
        ." *\n"
        ." * @mixin BotApiClient\n"
        ." *\n"
        .' * @generated from Telegram Bot API '.BOT_API_VERSION."\n"
        ." */\n"
        ."final class BotApi extends Facade\n"
        ."{\n"
        ."    protected static function getFacadeAccessor(): string\n"
        ."    {\n"
        ."        return BotApiClient::class;\n"
        ."    }\n"
        ."}\n";
}

/** @param array<string, string> $files */
function writeGeneratedFiles(string $directory, array $files): void
{
    $generatedRoot = str_replace('\\', '/', dirname(__DIR__).'/src/BotApi/Generated');
    $normalizedDirectory = str_replace('\\', '/', $directory);
    if (! str_starts_with($normalizedDirectory, $generatedRoot.'/')) {
        fail("Refusing to write outside generated root: {$directory}");
    }
    if (! is_dir($directory) && ! mkdir($directory, 0777, true) && ! is_dir($directory)) {
        fail("Unable to create generated directory {$directory}");
    }
    foreach (new FilesystemIterator($directory) as $file) {
        if ($file->isFile() && $file->getExtension() === 'php' && ! unlink($file->getPathname())) {
            fail("Unable to remove stale generated file {$file->getPathname()}");
        }
    }
    foreach ($files as $name => $contents) {
        if (file_put_contents($directory.'/'.$name, $contents) === false) {
            fail("Unable to write generated file {$name}");
        }
    }
}

$options = getopt('', ['source:', 'output:', 'manifest-only']);
$source = isset($options['source']) && is_string($options['source'])
    ? $options['source']
    : BOT_API_URL;
$output = isset($options['output']) && is_string($options['output'])
    ? $options['output']
    : dirname(__DIR__).'/resources/telegram-bot-api-'.BOT_API_VERSION.'.json';

$html = @file_get_contents($source);
if (! is_string($html) || $html === '') {
    fail("Unable to read Telegram Bot API documentation from {$source}");
}
if (preg_match('/\bBot API ([0-9]+\.[0-9]+)\b/', $html, $matches) !== 1 || $matches[1] !== BOT_API_VERSION) {
    $actual = $matches[1] ?? 'unknown';
    fail('Expected Telegram Bot API '.BOT_API_VERSION."; the source identifies its latest version as {$actual}.");
}

$document = new DOMDocument;
libxml_use_internal_errors(true);
if (! $document->loadHTML($html, LIBXML_NONET | LIBXML_NOERROR | LIBXML_NOWARNING)) {
    fail('Unable to parse Telegram Bot API documentation.');
}
libxml_clear_errors();

$xpath = new DOMXPath($document);
$headings = $xpath->query('//h4[a[contains(concat(" ", normalize-space(@class), " "), " anchor ")]]');
if ($headings === false) {
    fail('Unable to enumerate Telegram Bot API sections.');
}

$types = [];
$methods = [];
$typeCandidates = [];
$methodCandidates = [];
foreach ($headings as $heading) {
    if (! $heading instanceof DOMElement) {
        continue;
    }
    $name = normalizeText($heading->textContent);
    if ($name === '') {
        continue;
    }
    $isTypeName = preg_match('/^[A-Z][A-Za-z0-9_]*$/', $name) === 1;
    $isMethodName = preg_match('/^[a-z][A-Za-z0-9_]*$/', $name) === 1;
    if (! $isTypeName && ! $isMethodName) {
        continue;
    }
    $anchorNode = $heading->getElementsByTagName('a')->item(0);
    $anchor = $anchorNode instanceof DOMElement ? $anchorNode->getAttribute('name') : '';
    $elements = followingSectionElements($heading);
    $description = sectionDescription($elements);
    if ($isTypeName) {
        $typeCandidates[$name] = ['anchor' => $anchor, 'description' => $description];
    }
    if ($isMethodName) {
        $methodCandidates[$name] = true;
    }
    $table = null;
    foreach ($elements as $element) {
        if (strtolower($element->tagName) === 'table') {
            $table = $element;
            break;
        }
    }
    $headers = $table instanceof DOMElement ? tableHeaders($table) : [];

    if ($isTypeName && $headers === ['Field', 'Type', 'Description']) {
        $types[$name] = [
            'anchor' => $anchor,
            'description' => $description,
            'kind' => 'object',
            'fields' => parseFields($table),
            'variants' => [],
        ];

        continue;
    }

    if ($isMethodName && $headers === ['Parameter', 'Type', 'Required', 'Description']) {
        $methods[$name] = [
            'anchor' => $anchor,
            'description' => $description,
            'return_type' => null,
            'parameters' => parseParameters($table),
        ];

        continue;
    }

    if ($isMethodName && preg_match('/\bmethod\b|\breturns?\b/i', $description) === 1) {
        $methods[$name] = [
            'anchor' => $anchor,
            'description' => $description,
            'return_type' => null,
            'parameters' => [],
        ];

        continue;
    }

    $variants = unionVariants($elements);
    if ($isTypeName && ($variants !== [] || preg_match('/\bobject\b|\brepresents?\b|\bdescribes?\b/i', $description) === 1)) {
        $types[$name] = [
            'anchor' => $anchor,
            'description' => $description,
            'kind' => $variants === [] ? 'marker' : 'union',
            'fields' => [],
            'variants' => $variants,
        ];
    }
}

$unclassifiedMethods = array_diff_key($methodCandidates, $methods);
if ($unclassifiedMethods !== []) {
    fail('Unable to classify Telegram methods: '.implode(', ', array_keys($unclassifiedMethods)));
}

$referencedTypes = [];
$collectTypes = static function (string $rawType) use (&$referencedTypes): void {
    $withoutArrays = preg_replace('/\bArray of\s+/', '', $rawType);
    $normalized = preg_replace('/,\s*|\s+and\s+|\s+or\s+/', '|', is_string($withoutArrays) ? $withoutArrays : $rawType);
    foreach (explode('|', is_string($normalized) ? $normalized : $rawType) as $part) {
        $name = trim($part);
        if (preg_match('/^[A-Z][A-Za-z0-9_]*$/', $name) === 1) {
            $referencedTypes[$name] = true;
        }
    }
};
foreach ($types as $type) {
    foreach ($type['fields'] as $field) {
        $collectTypes($field['type']);
    }
    foreach ($type['variants'] as $variant) {
        $referencedTypes[$variant] = true;
    }
}
foreach ($methods as $method) {
    foreach ($method['parameters'] as $parameter) {
        $collectTypes($parameter['type']);
    }
}
foreach (array_keys($referencedTypes) as $referencedType) {
    if (isset($types[$referencedType]) || ! isset($typeCandidates[$referencedType])) {
        continue;
    }
    $types[$referencedType] = [
        'anchor' => $typeCandidates[$referencedType]['anchor'],
        'description' => $typeCandidates[$referencedType]['description'],
        'kind' => 'marker',
        'fields' => [],
        'variants' => [],
    ];
}

foreach ($methods as &$method) {
    $method['return_type'] = returnType($method['description'], $types);
    $collectTypes($method['return_type']);
}
unset($method);

$builtInTypes = array_fill_keys(['Mixed', 'Integer', 'Float', 'Boolean', 'True', 'String'], true);
$unresolvedTypes = array_diff_key($referencedTypes, $types, $builtInTypes);
if ($unresolvedTypes !== []) {
    fail('Unable to resolve Telegram types: '.implode(', ', array_keys($unresolvedTypes)));
}

ksort($types);
ksort($methods);
$manifest = [
    'api_version' => BOT_API_VERSION,
    'source' => BOT_API_URL,
    'types' => $types,
    'methods' => $methods,
];

$schemaJson = json_encode($manifest, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
if (! is_string($schemaJson)) {
    fail('Unable to encode Telegram Bot API schema for hashing.');
}
$manifest['schema_sha256'] = hash('sha256', $schemaJson);

$directory = dirname($output);
if (! is_dir($directory) && ! mkdir($directory, 0777, true) && ! is_dir($directory)) {
    fail("Unable to create {$directory}");
}
$json = json_encode($manifest, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
if (! is_string($json) || file_put_contents($output, $json.PHP_EOL) === false) {
    fail("Unable to write {$output}");
}

if (! array_key_exists('manifest-only', $options)) {
    $generated = dirname(__DIR__).'/src/BotApi/Generated';
    writeGeneratedFiles($generated.'/Types', renderTypes($types));
    writeGeneratedFiles($generated.'/Requests', renderRequests($methods, $types));
    if (file_put_contents($generated.'/Methods.php', renderMethodsTrait($methods, $types)) === false) {
        fail('Unable to write generated methods trait.');
    }
    if (file_put_contents(dirname(__DIR__).'/src/Facades/BotApi.php', renderFacade($methods, $types)) === false) {
        fail('Unable to write generated BotApi facade metadata.');
    }
}

printf(
    "Telegram Bot API %s: %d types, %d methods, schema sha256 %s\n",
    BOT_API_VERSION,
    count($types),
    count($methods),
    $manifest['schema_sha256'],
);
