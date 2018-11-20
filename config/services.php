<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => env("FB_APP",'294387140965735'), 
        'client_secret' => '52c22f5aa1bde9c5cf86636c4a9a8b51', // Your GitHub Client Secret
        'redirect' => 'http://localhost:8000/login/github/callback',
    ],
    
    
    'github' => [
        'client_id' => 'ed7f2913680dd499383f',         // Your GitHub Client ID
        'client_secret' => 'bdc9c7a4286a66dbecec580583912fd036ba6e71', // Your GitHub Client Secret
        'redirect' => 'http://localhost:8000/login/github/callback',
    ],
    // 
];
