<?php
/*
Plugin Name: Custom WooCommerce Additions
Description: Adds a custom payment gateway, custom post type, and custom field to WooCommerce.
Author: Mitchelle
*/

// Exit if accessed directly.
if (!defined('ABSPATH')) exit;

// Include each feature file.
include_once plugin_dir_path(__FILE__) . 'includes/class-custom-gateway.php';
include_once plugin_dir_path(__FILE__) . 'includes/class-course-post-type.php';
include_once plugin_dir_path(__FILE__) . 'includes/class-custom-product-field.php';
