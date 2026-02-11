<?php

return [
    'drivers' => [
        'mercadolivre' => [
            'client_id' => env('ML_CLIENT_ID'),
            'tags' => [
                'items' => '/items',
                'orders' => '/orders',
                'payments' => '/collections',
            ],
            'auth_base_url' => 'https://auth.mercadolivre.com.br',
            'api_base_url' => 'https://api.mercadolibre.com',
        ],

        'shopee' => [
            'partner_id' => env('SHOPEE_PARTNER_ID'),
            'partner_key' => env('SHOPEE_PARTNER_KEY'),
            'api_base_url' => 'https://partner.shopeemobile.com/api/v2',
        ],
    ],
];