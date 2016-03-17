Laravel UPS Api (In Development)
=================

[![Build Status](https://travis-ci.org/rooferz/Laravel-UPS-Api.svg?branch=master)](https://travis-ci.org/rooferz/Laravel-UPS-Api)

Laravel UPS Api was created by, and is maintained by [Pierre Tondereau](https://github.com/rooferz), and PHP UPS Api was created by, and is maintained by [Gabriel Bull](https://github.com/gabrielbull) at [PHP UPS API](https://github.com/gabrielbull). Feel free to check out the [change log](CHANGELOG.md), [releases](https://github.com/rooferz/Laravel-UPS-Api/releases), [license](LICENSE), and [contribution guidelines](CONTRIBUTING.md).

## Installation

Either [PHP](https://php.net) 5.5+ or [HHVM](http://hhvm.com) 3.6+ are required.

To get the latest version of Laravel UPS Api, simply require the project using [Composer](https://getcomposer.org):

```bash
$ composer require rooferz/laravel-ups-api
```

Instead, you may of course manually update your require block and run `composer update` if you so choose:

```json
{
    "require": {
        "rooferz/laravel-ups-api": "*"
    }
}
```

Once Laravel UPS Api is installed, you need to register the service provider. Open up `config/app.php` and add the following to the `providers` key.

* `'Rooferz\LaravelUpsApi\UpsApiServiceProvider'`

You can register the Flysystem facade in the `aliases` key of your `config/app.php` file if you like.

* `'UPS' => 'Rooferz\LaravelUpsApi\Facades\UpsApi'`


## Configuration

Laravel UPS Api requires connection configuration.

To get started, you'll need to publish all vendor assets:

```bash
$ php artisan vendor:publish
```

This will create a `config/ups.php` file in your app that you can modify to set your configuration. Also, make sure you check for changes to the original config file in this package between releases.

MORE IN FUTURE...

## Usage

TODO

##### Further Information

There are other classes in this package that are not documented here. This is because they are not intended for public use and are used internally by this package.


## Security

If you discover a security vulnerability within this package, please send an e-mail to Pierre Tondereau at pierre@doers.fr. All security vulnerabilities will be promptly addressed.


## License

Laravel Ups Api is licensed under [The MIT License (MIT)](LICENSE).
