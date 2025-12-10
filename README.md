# Announcements for Laravel // Filament

// TODO: Description

## Installation

You can install the package via composer:

```bash
composer require syndicatephp/barker
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="barker-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="barker-config"
```

## Usage

```php
$barker = new Syndicate\Barker();
echo $barker->echoPhrase('Hello, Syndicate!');
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
