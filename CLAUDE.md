# CLAUDE.md — Laravel Telegram

## Purpose

This repository contains a typed Telegram Bot API client and DTO package for
Laravel applications.

## Commands

```bash
composer install
composer generate:bot-api
composer qa
```

## Conventions

- The Composer package is `cnxapp/laravel-telegram` and the PHP namespace is
  `Cnx\LaravelTelegram`.
- Response DTOs map Telegram's snake_case payloads through `SnakeCaseMapper`.
- The complete generated Bot API layer is pinned to the authoritative manifest
  in `resources/telegram-bot-api-10.2.json`; change it only through
  `tools/generate-bot-api.php`.
- Never edit files under `src/BotApi/Generated` manually.
- Add a deserialization test based on a representative Telegram JSON payload
  whenever a DTO is introduced or changed.
- Never commit Telegram tokens, webhook secrets, or real chat identifiers.
- Keep the generated-contract test exhaustive when the Bot API version changes.
