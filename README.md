PHP-CS-Fixer Rules
================
[![license-badge]][license] [![release-version-badge]][packagist] ![php-version-badge]

A Rule set for PHP-CS-Fixer mainly targeting PHP 7.1 or higher. See [Rules.php](./src/Rules.php) for the rules detail.

## Installation via Composer

``` bash
$ composer require --dev suin/php-cs-fixer-rules
```

## Setting up .php_cs.dist

Create .php_cs.dist in your project: 

```php
<?php

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules(Suin\PhpCsFixer\Rules::create([
        // If you want to overwrite default rules
        // add rules here.
        'declare_strict_types' => false,
    ]))
    ->setFinder(PhpCsFixer\Finder::create()
        ->exclude('vendor')
        ->in(__DIR__)
    );
```

## Changelog

Please see [CHANGELOG](https://github.com/suin/php/blob/master/CHANGELOG.md) for more details.

## Contributing

Send [issue](https://github.com/suin/php/issues) or [pull-request](https://github.com/suin/php/pulls) to main repository.

<!-- Badges -->
[travis-ci]: https://travis-ci.org/suin/php-cs-fixer-rules
[travis-ci-badge]: https://img.shields.io/travis/suin/php-cs-fixer-rules.svg?style=flat-square
[packagist]: https://packagist.org/packages/suin/php-cs-fixer-rules
[packagist-dt-badge]: https://img.shields.io/packagist/dt/suin/php-cs-fixer-rules.svg?style=flat-square
[license]: LICENSE.md
[license-badge]: https://img.shields.io/github/license/suin/php-cs-fixer-rules.svg?style=flat-square
[php-version-badge]: https://img.shields.io/packagist/php-v/suin/php-cs-fixer-rules.svg?style=flat-square
[release-version-badge]: https://img.shields.io/packagist/v/suin/php-cs-fixer-rules.svg?style=flat-square&label=release
