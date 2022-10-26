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
        
    'google' => [
        'client_id' => '650508082079-mvkicb4jvd3l3vjhtvn2lh104obraht7.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost:8000/google/callback',
    ],

    'facebook' => [
        'client_id' => '2685930238207333',
        'client_secret' => '0f89eb442236b6bc139aa3c7c27c4f04',
        'redirect' => 'http://localhost:8000/facebook/callback',
    ],

    'twitter' => [
        'client_id' => '5OH2EF3F9vJ8K8Asqiq7qwpF0',
        'client_secret' => 'KrPzer7Kxes3WK4e7JkZtpgsGqTVGsRVlKIG2YnqCogiyCVVQb',
        'redirect' => 'http://localhost:8000/callback',
    ],

    'github' => [
        'client_id' => '0b174ad16b2b402d64b4',
        'client_secret' => '14833e05134691b32c9e0476595a32b9cc764567',
        'redirect' => 'http://localhost:8000/login/github/callback',
    ],

    'linkedin' => [
        'client_id' => '86e92zqn2efc9p',
        'client_secret' => 'Xzpsk2LYuJlPne3Q',
        'redirect' => 'http://localhost:8000/linkedin/callback',
    ],



    

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

];
