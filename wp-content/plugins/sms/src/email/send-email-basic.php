<?php

/**
 * Send an Email message by using Infobip API.
 *
 * This example is already pre-populated with your account data:
 * 1. Your account Base URL
 * 2. Your account API key
 * 3. Your sender and recipient email addresses
 *
 * THIS CODE EXAMPLE IS READY BY DEFAULT. HIT RUN TO SEND THE MESSAGE!
 *
 * Send Email API reference: https://www.infobip.com/docs/api#channels/email/send-email
 * See Readme file for details.
 */

require '../../vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

$client = new Client([
    'base_uri' => "https://zjw56k.api.infobip.com/",
    'headers' => [
        'Authorization' => "App b79a3df57409e13a56bd7c197828eeac-40a516b4-8420-44ce-9eff-162de5fd25ec",
        'Content-Type' => 'multipart/form-data',
        'Accept' => 'application/json',
    ]
]);

$response = $client->request(
    'POST',
    'email/2/send',
    [
        RequestOptions::MULTIPART => [
            ['name' => 'from', 'contents' => "asttesting@selfserviceib.com"],
            ['name' => 'to', 'contents' => "rakesh.bokde@arsenaltech.com"],
            ['name' => 'subject', 'contents' => 'This is a sample email subject'],
            ['name' => 'text', 'contents' => 'This is a sample email message.'],
            // example how to attach a file
            /*[
                'Content-type' => 'multipart/form-data',
                'name' => 'file',
                'contents' => fopen('/tmp/testfile.pdf', 'r'),
                'filename' => 'testfile.pdf',
            ],*/
        ],
    ]
);

echo("HTTP code: " . $response->getStatusCode() . PHP_EOL);
echo("Response body: " . $response->getBody()->getContents() . PHP_EOL);
