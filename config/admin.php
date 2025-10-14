<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Admin default account
    |--------------------------------------------------------------------------
    | Here you may specify the default account that should be used to log
    | in to the admin panel. This account will only be used if you
    | have not yet created any other accounts.
    | You should change these credentials.
    | The password should be at least 8 characters long.
    */

    'default' => [
        'name' => env('ADMIN_NAME', 'Administrator'),
        'email' => env('ADMIN_EMAIL', 'admin@example.com'),
        'password' => env('ADMIN_PASSWORD', 'password'),
    ],
];
