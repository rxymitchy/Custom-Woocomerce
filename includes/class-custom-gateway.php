<?php

// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// Initialize the custom gateway class
function custom_gateway_init() {
    if (!class_exists('WC_Payment_Gateway')) return;

    // Define the Custom Gateway class
    class WC_Custom_Gateway extends WC_Payment_Gateway {
        // Constructor to set up gateway properties and settings
        public function __construct() {
            $this->id = 'custom_gateway'; // Unique ID for the gateway
            $this->has_fields = false; // No custom fields on checkout
            $this->method_title = 'Custom Gateway';
            $this->method_description = 'A custom WooCommerce payment gateway for mock payments.';

            // Initialize form fields and settings
            $this->init_form_fields();
            $this->init_settings();

            // Set the title from admin settings
            $this->title = $this->get_option('title');

            // Hook to save admin options
            add_action('woocommerce_update_options_payment_gateways_' . $this->id, [$this, 'process_admin_options']);
        }

        // Define the form fields for the admin panel
        public function init_form_fields() {
            $this->form_fields = [
                'title' => [
                    'title'       => 'Title',
                    'type'        => 'text',
                    'description' => 'The title displayed to users at checkout.',
                    'default'     => 'Custom Gateway'
                ]
            ];
        }

        // Process the payment (mock completion for this example)
        public function process_payment($order_id) {
            $order = wc_get_order($order_id);
            $order->payment_complete(); // Mark order as completed
            wc_reduce_stock_levels($order_id); // Reduce stock levels
            $order->add_order_note('Payment processed through Custom Gateway'); // Add order note

            // Return success and redirect URL for the order
            return [
                'result'   => 'success',
                'redirect' => $this->get_return_url($order)
            ];
        }
    }
}

// Register the custom gateway with WooCommerce
add_filter('woocommerce_payment_gateways', 'add_custom_gateway');
function add_custom_gateway($methods) {
    $methods[] = 'WC_Custom_Gateway'; // Add the gateway class to WooCommerce
    return $methods;
}

// Initialize the gateway after plugins have loaded
add_action('plugins_loaded', 'custom_gateway_init', 11);
