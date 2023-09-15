<?php
/**
* Plugin Name: sms
* Plugin URI: https://github.com/yagniksangani/wc-order-pdf-download
* Description: A plugin to download pdf for WooCommerce orders.
* Version: 1.0.4
* Author: Yagnik Sangani
* Text Domain: wcorderpdf
* License: GPL v2 or later
*/


function send_data_to_api($order_id) {
    // API endpoint URL
    $api_url = 'https://zjw56k.api.infobip.com/sms/2/text/advanced';

     // Load the order
     $order = wc_get_order( $order_id );

    $customer_phone = $order->get_billing_phone();
    $customer_name = $order->get_billing_first_name() . ' ' . $order->get_billing_last_name();
    $order_total = $order->get_total();

    // Compose the SMS message
    $message = "Hello $customer_name, thank you for your order #" . $order->get_order_number() . ". Your order total is $order_total. We'll process it soon.";


    // API headers
    $headers = array(
        'Content-Type' => 'application/json', // Set appropriate content type
        'Authorization' => 'App b79a3df57409e13a56bd7c197828eeac-40a516b4-8420-44ce-9eff-162de5fd25ec', // Replace with your token
    );

    // Data to send (in JSON format)
    $data = array(
        'messages' => array(
            "from" => "Shoping Site",
            "destinations" => array(
                "to" => "91".$customer_phone
            ),
            "text" => $message
        ),
    );

    // API request arguments
    $args = array(
        'headers' => $headers,
        'body' => json_encode($data), // Encode data as JSON
    );

    // Make the API request
    $response = wp_remote_post($api_url, $args);

    // Check for errors
    if (is_wp_error($response)) {
        echo 'Error: ' . $response->get_error_message();
    } else {

        // Get the response body
        $body = wp_remote_retrieve_body($response);
        // $data =  (array) $body ;
        $array1 = json_decode(json_encode($body), true);
        $data = json_decode($array1);   
        $json = json_encode($data->messages);
        $array = json_decode($json, true);
        print_r($array[0]['status']['groupId']);
        if ( $array[0]['messageId'] && !empty($array[0]['status']['groupId']) ) {
            // wp_send_json_success(array('message' => "Test message send successfully"));
        }else{
            // wp_send_json_error(array('message' => 'Something goes wrong, Please try again'));
        }
              
    }
}

add_action('woocommerce_new_order', 'send_data_to_api');






