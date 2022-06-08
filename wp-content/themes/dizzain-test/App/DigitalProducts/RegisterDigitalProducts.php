<?php

namespace App\DigitalProducts;

use App\Controllers\RegisterPostType;
use App\Controllers\LabelGenerator as Labels;

class RegisterDigitalProducts extends RegisterPostType
{
    const POST_TYPE = 'digital_product';

    public function __construct()
    {
        $this->post_type = self::POST_TYPE;
        $this->post_type_slug = 'digital-product';
        $this->post_type_plural_name = 'Digital Products';
        $this->post_type_singular_name = 'Digital Product';

        add_action('init', function () {
            $this->register(array(
                'menu_icon' => 'dashicons-book-alt',
                'menu_position' => 20,
                'public' => true,
                'show_in_rest' => true,
                'has_archive' => false,
                'taxonomy' => true,
                'capability_type' => 'post',
                'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt'),
            ));
        });

        add_action('init', function () {

            $labels = Labels::generate('taxonomy', 'Digital Product category', 'Digital Products categories');

            register_taxonomy('dizz_digital_product_categories', array(strtolower($this->post_type)), array(
                'labels' => $labels,
                'hierarchical' => true,
                'show_ui' => true,
                'query_var' => true,
                'show_admin_column' => true,
                'show_in_rest' => true,
                'rewrite' => array('slug' => 'digital_product_category'),
                'show_in_nav_menus' => true
            ));
        });
    }
}