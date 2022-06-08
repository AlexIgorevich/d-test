<?php


namespace App\CustomGutenberg;


final class RegisterWidgets
{

    public static function init()
    {

        if (!function_exists('acf_register_block')) {
            return;
        }

        // Register blocks

        //	Hero block
        acf_register_block(array(
            'name' => 'hero',
            'title' => __('Hero', 'acf-blocks'),
            'description' => __('Hero block.', 'acf-blocks'),
            'render_callback' => array(__CLASS__, 'render_block'),
            'render_template' => 'views/blocks/hero.php',
            'icon' => 'admin-comments',
        ));

        //	Digital products block
        acf_register_block(array(
            'name' => 'digital-products',
            'title' => __('Digital products', 'acf-blocks'),
            'description' => __('Digital products block.', 'acf-blocks'),
            'render_callback' => array(__CLASS__, 'render_block'),
            'render_template' => 'views/blocks/digital-products.php',
            'icon' => 'admin-comments',
        ));

        //	Portfolio block
        acf_register_block(array(
            'name' => 'portfolio',
            'title' => __('Portfolio', 'acf-blocks'),
            'description' => __('Portfolio block.', 'acf-blocks'),
            'render_callback' => array(__CLASS__, 'render_block'),
            'render_template' => 'views/blocks/portfolio.php',
            'icon' => 'admin-comments',
        ));
    }
}