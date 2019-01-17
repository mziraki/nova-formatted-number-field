# Laravel Nova Formatted Number Field
A formatted number input field for Laravel Nova

## Installation

Install the package into a Laravel app that uses [Nova](https://nova.laravel.com) with Composer:

```bash
composer require mziraki/nova-formatted-number-field
```

## Usage

Add the field to your resource in the ```fields``` method:
```php
use MZiraki\Fields\FormattedNumber;

FormattedNumber::make('Price')
    ->rules('numeric', /* ... */),
```

The field extends the `Laravel\Nova\Fields\Number` field, so all the usual methods are available.

It is recommended that you include the standard `numeric` validation rule, as it is not automatically added.

The field is displayed as an `<input type="text">` element.
