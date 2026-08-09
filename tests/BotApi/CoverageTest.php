<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\Tests\BotApi;

use Cnx\LaravelTelegram\BotApi\InputFile;
use Cnx\LaravelTelegram\BotApi\Request;
use Cnx\LaravelTelegram\BotApi\Type;
use Cnx\LaravelTelegram\BotApiClient;
use Cnx\LaravelTelegram\Tests\TestCase;

class CoverageTest extends TestCase
{
    public function test_generated_contract_covers_the_pinned_bot_api_schema(): void
    {
        $manifest = $this->manifest();

        self::assertSame('10.2', $manifest['api_version']);
        self::assertSame('7b567f7e567218918d899c5217e0fdfcb1f437c495e2cbece568c59592a3c791', $manifest['schema_sha256']);
        self::assertCount(388, $manifest['types']);
        self::assertCount(185, $manifest['methods']);

        foreach ($manifest['types'] as $name => $definition) {
            if ($name === 'InputFile') {
                self::assertTrue(class_exists(InputFile::class));

                continue;
            }

            $class = 'Cnx\\LaravelTelegram\\BotApi\\Generated\\Types\\'.$name;
            self::assertTrue(class_exists($class), "Missing generated Telegram type {$name}.");
            self::assertTrue(is_subclass_of($class, Type::class));

            /** @var class-string<Type> $class */
            if ($definition['kind'] === 'union') {
                $variants = array_map(
                    static fn (string $variant): string => 'Cnx\\LaravelTelegram\\BotApi\\Generated\\Types\\'.$variant,
                    $definition['variants'],
                );
                self::assertSame($variants, $class::variantClasses(), "Union variants differ for {$name}.");

                $signatures = [];
                foreach ($variants as $variant) {
                    /** @var class-string<Type> $variant */
                    $required = array_keys(array_filter(
                        $variant::fieldDefinitions(),
                        static fn (array $field): bool => ! $field['optional'],
                    ));
                    sort($required);
                    $signature = json_encode(
                        [$variant::fixedFields(), $required],
                        JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES,
                    );
                    $duplicate = $signatures[$signature] ?? null;
                    self::assertNull(
                        $duplicate,
                        "Union {$name} cannot distinguish {$variant} from {$duplicate}.",
                    );
                    $signatures[$signature] = $variant;
                }

                continue;
            }

            $fields = [];
            foreach ($definition['fields'] as $field) {
                $fields[$field['field']] = [
                    'property' => $this->camelCase($field['field']),
                    'type' => $field['type'],
                    'optional' => $field['optional'],
                ];
            }
            self::assertSame($fields, $class::fieldDefinitions(), "Field coverage differs for {$name}.");
        }

        foreach ($manifest['methods'] as $method => $definition) {
            $request = 'Cnx\\LaravelTelegram\\BotApi\\Generated\\Requests\\'.ucfirst($method).'Request';
            self::assertTrue(class_exists($request), "Missing request for Telegram method {$method}.");
            self::assertTrue(is_subclass_of($request, Request::class));
            self::assertTrue(method_exists(BotApiClient::class, $method), "Missing client method {$method}.");

            /** @var class-string<Request> $request */
            self::assertSame($method, $request::method());
            self::assertSame($definition['return_type'], $request::returnType());

            $parameters = [];
            foreach ($definition['parameters'] as $parameter) {
                $parameters[$parameter['parameter']] = [
                    'property' => $this->camelCase($parameter['parameter']),
                    'type' => $parameter['type'],
                    'optional' => ! $parameter['required'],
                ];
            }
            self::assertSame($parameters, $request::fieldDefinitions(), "Parameter coverage differs for {$method}.");
        }
    }

    /**
     * @return array{
     *     api_version: string,
     *     schema_sha256: string,
     *     types: array<string, array{kind: string, fields: list<array{field: string, type: string, optional: bool}>, variants: list<string>}>,
     *     methods: array<string, array{return_type: string, parameters: list<array{parameter: string, type: string, required: bool}>}>
     * }
     */
    private function manifest(): array
    {
        $contents = file_get_contents(dirname(__DIR__, 2).'/resources/telegram-bot-api-10.2.json');
        self::assertIsString($contents);

        /** @var array{
         *     api_version: string,
         *     schema_sha256: string,
         *     types: array<string, array{kind: string, fields: list<array{field: string, type: string, optional: bool}>, variants: list<string>}>,
         *     methods: array<string, array{return_type: string, parameters: list<array{parameter: string, type: string, required: bool}>}>
         * } $manifest
         */
        $manifest = json_decode($contents, true, 512, JSON_THROW_ON_ERROR);

        return $manifest;
    }

    private function camelCase(string $value): string
    {
        $parts = explode('_', $value);
        $first = array_shift($parts);

        return $first.implode('', array_map(static fn (string $part): string => ucfirst($part), $parts));
    }
}
