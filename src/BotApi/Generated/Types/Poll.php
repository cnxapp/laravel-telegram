<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\BotApi\Generated\Types;

use Cnx\LaravelTelegram\BotApi\Type;

/** @generated from Telegram Bot API 10.2 */
final class Poll extends Type
{
    /** @var array<string, array{property: string, type: string, optional: bool}> */
    protected const FIELDS = [
        'id' => ['property' => 'id', 'type' => 'String', 'optional' => false],
        'question' => ['property' => 'question', 'type' => 'String', 'optional' => false],
        'question_entities' => ['property' => 'questionEntities', 'type' => 'Array of MessageEntity', 'optional' => true],
        'options' => ['property' => 'options', 'type' => 'Array of PollOption', 'optional' => false],
        'total_voter_count' => ['property' => 'totalVoterCount', 'type' => 'Integer', 'optional' => false],
        'is_closed' => ['property' => 'isClosed', 'type' => 'Boolean', 'optional' => false],
        'is_anonymous' => ['property' => 'isAnonymous', 'type' => 'Boolean', 'optional' => false],
        'type' => ['property' => 'type', 'type' => 'String', 'optional' => false],
        'allows_multiple_answers' => ['property' => 'allowsMultipleAnswers', 'type' => 'Boolean', 'optional' => false],
        'allows_revoting' => ['property' => 'allowsRevoting', 'type' => 'Boolean', 'optional' => false],
        'members_only' => ['property' => 'membersOnly', 'type' => 'Boolean', 'optional' => false],
        'country_codes' => ['property' => 'countryCodes', 'type' => 'Array of String', 'optional' => true],
        'correct_option_ids' => ['property' => 'correctOptionIds', 'type' => 'Array of Integer', 'optional' => true],
        'explanation' => ['property' => 'explanation', 'type' => 'String', 'optional' => true],
        'explanation_entities' => ['property' => 'explanationEntities', 'type' => 'Array of MessageEntity', 'optional' => true],
        'explanation_media' => ['property' => 'explanationMedia', 'type' => 'PollMedia', 'optional' => true],
        'open_period' => ['property' => 'openPeriod', 'type' => 'Integer', 'optional' => true],
        'close_date' => ['property' => 'closeDate', 'type' => 'Integer', 'optional' => true],
        'description' => ['property' => 'description', 'type' => 'String', 'optional' => true],
        'description_entities' => ['property' => 'descriptionEntities', 'type' => 'Array of MessageEntity', 'optional' => true],
        'media' => ['property' => 'media', 'type' => 'PollMedia', 'optional' => true],
    ];

    /**
     * @param  list<PollOption>  $options
     * @param  list<MessageEntity>|null  $questionEntities
     * @param  list<string>|null  $countryCodes
     * @param  list<int>|null  $correctOptionIds
     * @param  list<MessageEntity>|null  $explanationEntities
     * @param  list<MessageEntity>|null  $descriptionEntities
     */
    public function __construct(
        public readonly string $id,
        public readonly string $question,
        public readonly array $options,
        public readonly int $totalVoterCount,
        public readonly bool $isClosed,
        public readonly bool $isAnonymous,
        public readonly string $type,
        public readonly bool $allowsMultipleAnswers,
        public readonly bool $allowsRevoting,
        public readonly bool $membersOnly,
        public readonly ?array $questionEntities = null,
        public readonly ?array $countryCodes = null,
        public readonly ?array $correctOptionIds = null,
        public readonly ?string $explanation = null,
        public readonly ?array $explanationEntities = null,
        public readonly ?PollMedia $explanationMedia = null,
        public readonly ?int $openPeriod = null,
        public readonly ?int $closeDate = null,
        public readonly ?string $description = null,
        public readonly ?array $descriptionEntities = null,
        public readonly ?PollMedia $media = null,
    ) {}
}
