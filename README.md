# A FilamentPHP plugin that integrates AI-powered writing assistance into your Filament admin panel.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/faridmau/ai-writing-assistant.svg?style=flat-square)](https://packagist.org/packages/faridmau/ai-writing-assistant)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/faridmau/ai-writing-assistant/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/faridmau/ai-writing-assistant/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/faridmau/ai-writing-assistant/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/faridmau/ai-writing-assistant/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/faridmau/ai-writing-assistant.svg?style=flat-square)](https://packagist.org/packages/faridmau/ai-writing-assistant)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require faridmau/ai-writing-assistant
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="ai-writing-assistant-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="ai-writing-assistant-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="ai-writing-assistant-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$aiWritingAssistant = new Faridmau\AiWritingAssistant();
echo $aiWritingAssistant->echoPhrase('Hello, Faridmau!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [faridmau](https://github.com/faridmau)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
