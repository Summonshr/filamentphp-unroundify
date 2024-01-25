# Nullify round corners in filamentphp

[![Latest Version on Packagist](https://img.shields.io/packagist/v/summonshr/filamentphp-unroundify.svg?style=flat-square)](https://packagist.org/packages/summonshr/filamentphp-unroundify)
[![Total Downloads](https://img.shields.io/packagist/dt/summonshr/filamentphp-unroundify.svg?style=flat-square)](https://packagist.org/packages/summonshr/filamentphp-unroundify)

This package provides a solution to nullify round corners in filamentphp. It allows you to easily remove round corners from your filamentphp projects. 

To get started, you can install the package via composer by running the following command:

## Installation

You can install the package via composer:

```bash
composer require summonshr/filamentphp-unroundify
```

## Usage

```php
$panel
    ->plugins([
        new UnroundifyPlugin(excludes: ['fi-avatar'], includes: ['fi-another-class', 'fi-circular']),
    ]);
```
Yep, just this much.

Now your filamentphp projects stands out with smooth corners! 💫

## Credits

- [Suman Shrestha](https://github.com/Summonshr)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
