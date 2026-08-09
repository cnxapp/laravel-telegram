<?php

namespace Cnx\LaravelTelegram\DTO;

use Cnx\LaravelTelegram\LaravelData\Data;

class VideoChatParticipantsInvited extends Data
{
    /**
     * This object represents a service message about new members invited to a video chat.
     *
     * @link https://core.telegram.org/bots/api#videochatparticipantsinvited
     *
     * @param  User[]  $users  New members that were invited to the video chat
     */
    public function __construct(
        /** @var array<int, User> */
        public array $users,
    ) {}
}
