<?php


return [

    /*
    |--------------------------------------------------------------------------
    | PayMob Default Order Model
    |--------------------------------------------------------------------------
    |
    | This option defines the default Order model.
    |
    */

    'order' => [
        'model' => 'App\Models\Order'
    ],

    /*
    |--------------------------------------------------------------------------
    | PayMob token and merchant_id
    |--------------------------------------------------------------------------
    |
    | This is your PayMob token and merchant_id to make your requests.
    |
    */

    'token' => '',
    'merchant_id' => '',

    /*
    |--------------------------------------------------------------------------
    | PayMob username and password
    |--------------------------------------------------------------------------
    |
    | This is your PayMob username and password to make auth request.
    |
    */

    'username' => '',
    'password' => '',

    /*
    |--------------------------------------------------------------------------
    | PayMob integration id and iframe id
    |--------------------------------------------------------------------------
    |
    | This is your PayMob integration id and iframe id.
    |
    */

    'integration_id' => '',
    'iframe_id' => '',
];
