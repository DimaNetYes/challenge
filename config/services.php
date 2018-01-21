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
        'domain' => 'sandbox037587d7fbca4854bc2e659b3d8fdb4f.mailgun.org',
        'secret' => 'key-a5636ecdd217a44b6165692e6c19d6c6',
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
