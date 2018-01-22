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
        'domain' => 'sandbox0ca4176db98e4d3a8d811a51f3c71b02.mailgun.org',
        'secret' => 'key-98dcdcb3afcaaf9c6bb3c095c5d03c10',
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\Models\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'google' => [
        'client_id' => '11374064133-pk2qugo0khg6s3i6ttmquaqtr25ibiro.apps.googleusercontent.com',
        'client_secret' => 'R7AgHl0fx3cqoUEx_XVZnZly',
        'redirect' => 'http://quest/public/google/callback',
    ],

    'facebook' => [
        'client_id' => '186555511901697',
        'client_secret' => '52f3c5c57c8380d5798a3a0e5c31db4f',
        'redirect' => 'http://challenge.loc/callback',
    ],
];
