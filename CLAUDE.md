# CLAUDE.md — Laravel Telegram

## Purpose

This repository contains a typed Telegram Bot API client and DTO package for
Laravel applications.

## Commands

```bash
composer install
composer qa
```

## Conventions

- The Composer package is `cnxapp/laravel-telegram` and the PHP namespace is
  `Cnx\LaravelTelegram`.
- Response DTOs map Telegram's snake_case payloads through `SnakeCaseMapper`.
- Add a deserialization test based on a representative Telegram JSON payload
  whenever a DTO is introduced or changed.
- Never commit Telegram tokens, webhook secrets, or real chat identifiers.
- Do not claim complete Bot API coverage unless it is verified against an
  authoritative, versioned schema.
