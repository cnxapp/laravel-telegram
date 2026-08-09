<?php

declare(strict_types=1);

namespace Cnx\LaravelTelegram\Tests\BotApi;

use Cnx\LaravelTelegram\BotApi\Generated\Types\InputMediaPhoto;
use Cnx\LaravelTelegram\BotApi\Generated\Types\InputPollOption;
use Cnx\LaravelTelegram\BotApi\Generated\Types\User;
use Cnx\LaravelTelegram\BotApi\InputFile;
use Cnx\LaravelTelegram\BotApi\MultipartPayload;
use Cnx\LaravelTelegram\BotApiClient;
use Cnx\LaravelTelegram\Tests\TestCase;
use Illuminate\Support\Facades\Http;

class ClientTest extends TestCase
{
    public function test_generated_client_calls_and_hydrates_a_typed_method(): void
    {
        Http::fake([
            '*botdefault-token/getMe' => Http::response([
                'ok' => true,
                'result' => ['id' => 7, 'is_bot' => true, 'first_name' => 'Bot'],
            ]),
        ]);

        $user = $this->application()->make(BotApiClient::class)->getMe();

        self::assertInstanceOf(User::class, $user);
        self::assertSame(7, $user->id);
    }

    public function test_multipart_payload_supports_direct_and_nested_files(): void
    {
        $photo = InputFile::fromContents('photo-bytes', 'photo.jpg', 'image/jpeg');
        $thumbnail = InputFile::fromContents('thumb-bytes', 'thumb.jpg');
        $pollOption = new InputPollOption(
            text: 'Photo',
            media: new InputMediaPhoto(type: 'photo', media: $thumbnail),
        );

        $payload = MultipartPayload::from([
            'photo' => $photo,
            'poll_option' => $pollOption->toArray(),
        ]);

        self::assertArrayNotHasKey('photo', $payload->parameters);
        $pollOptionJson = $payload->parameters['poll_option'];
        self::assertIsString($pollOptionJson);
        self::assertSame(
            ['text' => 'Photo', 'media' => ['type' => 'photo', 'media' => 'attach://attachment_1']],
            json_decode($pollOptionJson, true, flags: JSON_THROW_ON_ERROR),
        );
        self::assertSame($photo, $payload->attachments['photo']);
        self::assertSame($thumbnail, $payload->attachments['attachment_1']);
    }
}
