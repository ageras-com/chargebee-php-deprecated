# AGENTS.md

## What this is

Ageras fork of the Chargebee PHP client for API v2, published on Packagist as `chargebee/chargebee-php-deprecated`. It exists so consumers (notably `billysbilling/integration-service`) can run it side by side with the official `chargebee/chargebee-php` package during a migration.

This library is frozen. Accept only compatibility and security fixes (for example the CA certificate update in v3.38.1). Do not add Chargebee resources, regenerate the client, upgrade the minimum PHP version, or rewrite `lib/`.

## Stack

- PHP `>=5.6.0` with `ext-curl`. Keep code compatible with PHP 5.6: no scalar type hints, return types, nullable types, or other PHP 7+ syntax.
- `guzzlehttp/guzzle` `>=6.5` for HTTP (`lib/ChargeBee/Guzzle.php`).
- SimpleTest (`simpletest/simpletest`) for tests. Not PHPUnit.

## Layout

| Path | Purpose |
|------|---------|
| `lib/ChargeBee.php`, `lib/AbstractChargeBee.php` | Entry point: `new ChargeBee($site, $apiKey)` configures the environment |
| `lib/ChargeBee/` | Core: `Environment`, `Request`, `Guzzle`, `Result`, `ListResult`, `Model`, `Util`, `Version` |
| `lib/ChargeBee/Models/` | One class per Chargebee resource |
| `lib/ChargeBee/Exceptions/` | `APIError`, `IOException`, `InvalidRequestException`, `OperationFailedException`, `PaymentException` |
| `lib/ssl/ca-certs.crt` | Bundled CA certificates used for TLS to Chargebee |
| `lib/init.php` | Manual (non-Composer) loader. Add a `require` here for any new file under `lib/` |
| `test/ChargeBee.php` | Test entry point that loads every test case |
| `test/ChargeBee/` | SimpleTest cases and `SampleData.php` fixtures |

## Namespace

Everything lives under `ChargeBeeDeprecated\` (PSR-4 and PSR-0 both map it to `lib/`). Never rename it back to `ChargeBee\`. The distinct namespace is what lets this package and `chargebee/chargebee-php` be installed together.

## Commands

```bash
composer install
php test/ChargeBee.php   # run all tests from the CLI (SimpleTest autorun)
composer test            # serve test/ on http://localhost:8080 to run tests in a browser
```

## Versioning

- `lib/ChargeBee/Version.php` intentionally stays at `3.38.0`; the Chargebee API receives this value. Patch releases are marked by git tags only (for example `v3.38.1`). Do not bump `Version.php` for a patch.
- Record every release in `CHANGELOG.md`, newest first, and say why the change was made.

## Ownership

`.github/CODEOWNERS` is managed by Terraform in `ageras-com/tf-github`. Do not edit it here.

This repository is public. Never commit API keys, site names, customer data, or internal URLs, including in tests and fixtures.
