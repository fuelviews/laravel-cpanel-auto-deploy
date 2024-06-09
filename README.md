# Laravel cpanel auto deploy package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/fuelviews/laravel-cpanel-auto-deploy.svg?style=flat-square)](https://packagist.org/packages/fuelviews/laravel-cpanel-auto-deploy)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/fuelviews/laravel-cpanel-auto-deploy/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/fuelviews/laravel-cpanel-auto-deploy/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/fuelviews/laravel-cpanel-auto-deploy/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/fuelviews/laravel-cpanel-auto-deploy/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/fuelviews/laravel-cpanel-auto-deploy.svg?style=flat-square)](https://packagist.org/packages/fuelviews/laravel-cpanel-auto-deploy)

Laravel cpanel auto deploy package streamlines the deployment process for laravel applications on dedicated whm/cpanel hosting environments.

## Installation

You can require the package and it's dependencies via composer:

```bash
composer require fuelviews/laravel-cpanel-auto-deploy
```

You can copy the default github action workflow from:

```bash
resources/workfllows/cpanel-auto-deploy.yml into .github/workflows/cpanel-auto-deploy.yml
```

**Default github action workflow triggers on PR to development branch

## Usage

You can manually run the script in terminal with:

```bash
./cpanel-auto-deploy.sh
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Thejmitchener](https://github.com/thejmitchener)
- [Fuelviews](https://github.com/fuelviews)
- [All Contributors](../../contributors)

## Support us

Fuelviews is a web development agency based in Portland, Maine. You'll find an overview of all our projects [on our website](https://fuelviews.com).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
