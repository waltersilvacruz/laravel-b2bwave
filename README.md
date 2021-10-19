# Laravel B2BWave API Client

PHP client wrapping the [B2BWave API](https://docs.b2bwave.com/category/97-api).

This package was designed to work with [Laravel](https://www.laravel.com), so this package is written with Laravel in mind.

## Installation

Install Laravel B2BWave API Cliente:

```bash
$ composer require waltersilvacruz/laravel-b2bwave
```

The package uses the [auto registration feature](https://laravel.com/docs/packages#package-discovery) of Laravel.

## Configuration

1. Add the appropriate values to your ```.env```

    ```bash
    B2BWAVE_APP_CODE=<API App Code>
    B2BWAVE_TOKEN=<API Token>
    ```

2. Publish configuration file

    #### Config
    A configuration file named ```b2bwave.php``` can be published to ```config/``` by running...
    
    ```bash
    php artisan vendor:publish --tag=b2bwave-config
    ```

## Usage

Here is an example of getting the customer's information from B2bWave:

```php
$b2bwave = app('B2BWaveClient');
$options = [
    'name' => 'John Doe'
];
$response = $b2bwave->customers()->search($array);
dd($response);
```
