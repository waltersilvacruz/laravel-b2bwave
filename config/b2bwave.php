<?php

return [
    /*
    |--------------------------------------------------------------------------
    | App Code
    |--------------------------------------------------------------------------
    |
    | Set the app code for API integration
    | Your credentials are under Settings-> Profile -> API Configuration tab
    |
    */
    'app_code' => env('B2BWAVE_APP_CODE'),

    /*
    |--------------------------------------------------------------------------
    | API Token
    |--------------------------------------------------------------------------
    |
    | Auth token for API integration
    | Your credentials are under Settings-> Profile -> API Configuration tab
    |
    */
    'token' => env('B2BWAVE_TOKEN'),

    /*
    |--------------------------------------------------------------------------
    | API Url
    |--------------------------------------------------------------------------
    |
    | Endpoint API URL
    |
    */
    'url' => sprintf("https://%s.b2bwave.com/api/", env('B2BWAVE_APP_CODE')),
];
