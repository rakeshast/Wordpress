<?php
/*
Plugin Name: testing
Description: Creates a wallet recharge product.
Version: 1.0
Author: Your Name
*/




// Function to create a wallet recharge product programmatically
function create_wallet_recharge_product() {
    // Check if WooCommerce is active
    if (!class_exists('WooCommerce')) {
        return;
    }

    // Check if the product already exists by its title
    $product_title = 'Wallet Recharge'; // Customize the product title as needed
    $product_id = wc_get_product_id_by_sku('wallet-recharge'); // Customize the SKU as needed

    if (!$product_id) {
        // Load WooCommerce functions
        include_once(WC()->plugin_path() . '/includes/admin/wc-admin-functions.php');

        // Create the product
        $product = new WC_Product();

        $product->set_name($product_title);
        $product->set_status('draft'); 
        $product->set_regular_price(100.00); // Customize the recharge amount as needed
        $product->set_sku('wallet-recharge'); // Customize the SKU as needed
        $product->set_virtual(true); // Set as 'true' for a virtual product
        // $product->set_downloadable(true); // Set as 'true' for a downloadable product

        // Add a download file (optional for downloadable products)
        // $download_file_url = 'https://example.com/download/wallet-recharge-file.zip'; // Customize the download file URL as needed
        // $product->set_downloads(array(array(
        //     'name' => $product_title,
        //     'file' => $download_file_url,
        // )));

        $product->save();
    }
}

// Hook to run the function when the plugin is activated
// function activate_wallet_recharge_plugin() {
//     create_wallet_recharge_product();
// }
// register_activation_hook(__FILE__, 'activate_wallet_recharge_plugin');


