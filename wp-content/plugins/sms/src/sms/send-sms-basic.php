<?php

/**
 * Send an SMS message directly by calling HTTP endpoint.
 *
 * For your convenience, environment variables are already pre-populated with your account data
 * like authentication, base URL and phone number.
 *
 * Please find detailed information in the readme file.
 */

require '../../vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

$client = new Client([
    'base_uri' => "https://zjw56k.api.infobip.com/",
    'headers' => [
        'Authorization' => "App b79a3df57409e13a56bd7c197828eeac-40a516b4-8420-44ce-9eff-162de5fd25ec",
        'Content-Type' => 'application/json',
        'Accept' => 'application/json',
    ]
]);

$response = $client->request(
    'POST',
    'sms/2/text/advanced',
    [
        RequestOptions::JSON => [
            'messages' => [
                [
                    'from' => 'InfoSMS',
                    'destinations' => [
                        ['to' => "917489491430"]
                    ],
                    'text' => 'This is a sample message',
                ]
            ]
        ],
    ]
);

echo("HTTP code: " . $response->getStatusCode() . PHP_EOL);
echo("Response body: " . $response->getBody()->getContents() . PHP_EOL);
