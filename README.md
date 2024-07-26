# Blade Icons Template

<a href="https://github.com/moh-slimani/blade-fontawesome/actions?query=workflow%3ATests">
    <img src="https://github.com/moh-slimani/blade-fontawesome/workflows/Tests/badge.svg" alt="Tests">
</a>
<a href="https://packagist.org/packages/moh-slimani/blade-fontawesome">
    <img src="https://img.shields.io/packagist/v/moh-slimani/blade-fontawesome" alt="Latest Stable Version">
</a>
<a href="https://packagist.org/packages/moh-slimani/blade-fontawesome">
    <img src="https://img.shields.io/packagist/dt/moh-slimani/blade-fontawesome" alt="Total Downloads">
</a>

A package to easily make use of [Fontawesome](https://github.com/refactoringui/heroicons) in your Laravel Blade views.

For a full list of available icons see [the SVG directory](resources/svg) or preview them at [fontawesome.com](https://fontawesome.com/).

## Requirements

- PHP 8.2 or higher
- Laravel 10.0 or higher

## Installation

```bash
composer require moh-slimani/blade-fontawesome
```

## Updating

Please refer to [`the upgrade guide`](UPGRADE.md) when updating the library.

## Blade Icons

Blade Fontawesome uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality. We also recommend to [enable icon caching](https://github.com/blade-ui-kit/blade-icons#caching) with this library.

## Configuration

Blade Fontawesome also offers the ability to use features from Blade Icons like default classes, default attributes, etc. If you'd like to configure these, publish the `blade-fontawesome.php` config file:

```bash
php artisan vendor:publish --tag=blade-fontawesome-config
```

## Usage

Icons can be used as self-closing Blade components which will be compiled to SVG icons:

```blade
<x-fa-s-bell/>
```

You can also pass classes to your icon components:

```blade
<x-fa-s-bell class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-fa-s-bell style="color: #555"/>
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-fontawesome--force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-fontawesome/s-bell.svg') }}" width="10" height="10"/>
```

## Changelog

Check out the [CHANGELOG](CHANGELOG.md) in this repository for all the recent changes.

## Maintainers

Blade Fontawesome is developed and maintained by Blade Developer.

## License

Blade Fontawesome is open-sourced software licensed under [the MIT license](LICENSE.md).
