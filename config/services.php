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
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'google' => [
        'client_id' => '620245015954-ogijgrcuudfpo71k87tertn8jk7fmndu.apps.googleusercontent.com',
        'client_secret' => 'mKmaMhFa0DQf7lv8BFiFGPas',
        'redirect' => 'http://localhost/challenge.loc/public/auth/google/callback',
    ],
    'facebook' => [
        'client_id' => '186555511901697',
        'client_secret' => '52f3c5c57c8380d5798a3a0e5c31db4f',
        'redirect' => 'http://challenge.loc/callback',
    ],
//    'vkontakte' => [
//        'client_id' => env('50OenfULuhUOwgToFmp6'),
//        'client_secret' => env('9c1ac1049c1ac1049c1ac104b69c4540dc99c1a9c1ac104c61003e35548e0c45b3d002b'),
//        'redirect' => env('http://challenge.loc/callback/vk'),
//    ],
];

