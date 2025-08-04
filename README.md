# Gravatar provider for Filament

[![Latest Version on Packagist](https://img.shields.io/packagist/v/vblinden/filament-gravatar-provider.svg?style=flat-square)](https://packagist.org/packages/vblinden/filament-gravatar-provider)
[![Tests](https://img.shields.io/github/actions/workflow/status/vblinden/filament-gravatar-provider/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/vblinden/filament-gravatar-provider/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/vblinden/filament-gravatar-provider.svg?style=flat-square)](https://packagist.org/packages/vblinden/filament-gravatar-provider)

Gravatar provider for Filament allows you to easily display user avatars from Gravatar within your Filament admin panels. By integrating this package, you can automatically fetch and show profile images based on users' email addresses.

## Installation

You can install the package via composer:

```bash
composer require vblinden/filament-gravatar-provider
```

## Usage

```php
use Vblinden\Filament\Gravatar\GravatarProvider;

$panel
    ->defaultAvatarProvider(GravatarProvider::class)
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [vblinden](https://github.com/vblinden)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
