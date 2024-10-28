<?php

// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// Add a custom text field to the WooCommerce product data panel
add_action('woocommerce_product_options_general_product_data', 'add_custom_text_field');
function add_custom_text_field() {
    woocommerce_wp_text_input([
        'id'          => '_custom_product_text_field',  // Unique ID for the custom field
        'label'       => 'Custom Text Field',           // Label displayed in the admin panel
        'desc_tip'    => true,                          // Display description as a tooltip
        'description' => 'Enter a custom text for this product.', // Description
    ]);
}

// Save the custom field value when a product is saved
add_action('woocommerce_process_product_meta', 'save_custom_text_field');
function save_custom_text_field($post_id) {
    $custom_field_value = isset($_POST['_custom_product_text_field']) ? sanitize_text_field($_POST['_custom_product_text_field']) : '';
    update_post_meta($post_id, '_custom_product_text_field', $custom_field_value); // Update the meta field
}

// Display the custom field value on the front-end product page
add_action('woocommerce_single_product_summary', 'display_custom_text_field', 25);
function display_custom_text_field() {
    global $product;
    $custom_field_value = get_post_meta($product->get_id(), '_custom_product_text_field', true); // Retrieve the meta value
    if ($custom_field_value) {
        echo '<p class="custom-field">' . esc_html($custom_field_value) . '</p>'; // Display the value
    }
}
