<?php

namespace App\Portfolio;

use App\Controllers\RegisterPostType;
use App\Controllers\LabelGenerator as Labels;

class RegisterPortfolio extends RegisterPostType
{
    const POST_TYPE = 'portfolio';

    public function __construct()
    {
        $this->post_type = self::POST_TYPE;
        $this->post_type_slug = 'portfolio';
        $this->post_type_plural_name = 'Portfolio';
        $this->post_type_singular_name = 'Portfolio';

        add_action('init', function () {
            $this->register(array(
                'menu_icon' => 'dashicons-book-alt',
                'menu_position' => 20,
                'public' => true,
                'show_in_rest' => false,
                'has_archive' => false,
                'taxonomy' => true,
                'capability_type' => 'post',
                'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt'),
            ));
        });

        add_action('init', function () {

            $labels = Labels::generate('taxonomy', 'Portfolio category', 'Portfolio categories');

            register_taxonomy('dizz_portfolio_categories', array(strtolower($this->post_type)), array(
                'labels' => $labels,
                'hierarchical' => true,
                'show_ui' => true,
                'query_var' => true,
                'show_admin_column' => true,
                'show_in_rest' => true,
                'rewrite' => array('slug' => 'dizz_portfolio_category'),
                'show_in_nav_menus' => true
            ));
        });
    }
}