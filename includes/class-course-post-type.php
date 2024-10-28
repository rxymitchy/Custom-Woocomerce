<?php

// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// Register the custom post type for Courses
function create_course_post_type() {
    register_post_type('course', [
        'labels' => [
            'name'          => 'Courses',         // Main name for the post type
            'singular_name' => 'Course',          // Singular name for a single entry
        ],
        'public'       => true,                  // Visible to public users
        'has_archive'  => true,                  // Enable archiving
        'show_in_menu' => true,                  // Show in the WordPress admin menu
        'supports'     => ['title', 'editor', 'thumbnail'], // Enable support for title, editor, thumbnail
    ]);
}
add_action('init', 'create_course_post_type'); // Hook to initialize post type

// Register a custom taxonomy for Course Categories
function create_course_taxonomy() {
    register_taxonomy('course_category', 'course', [
        'label'        => 'Course Categories',   // Label for the taxonomy
        'rewrite'      => ['slug' => 'course-category'], // URL slug
        'hierarchical' => true,                  // Hierarchical structure like categories
    ]);
}
add_action('init', 'create_course_taxonomy'); // Hook to initialize taxonomy
