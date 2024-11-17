<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    /* start stripe service */
    'stripe' => [
        'publishable_key' => env('STRIPE_PUBLISHABLE_KEY','pk_test_51LNzI0Ga1UipKJWJgV4LxYq9utepOCitP5dQJDdyyH57we0oZbB8hb0pIvYZhXKTmqOCWerqQwmL1STyxVoCzhF400P1jYpqtG'),
        'secret_key' => env('STRIPE_SECRET_KEY','sk_test_51LNzI0Ga1UipKJWJV1wZd1DB0IFLjzh6ipsXNy75Vn2Fw5ZA8XgmvrKCheORu6GRcF0YU9VzA5SOiQksBulOzf6W00S3D36k5a'),
        'webhook_secret' => env('STRIPE_WEBHOOK_SECRET_KEY',''),
    ],
    /* end stripe service */

];
