<?php
if (!defined('_S_VERSION')) {
    define('_S_VERSION', 1.0);
}

define('DIZZAIN_TEXTDOMAIN', 'dizzain');

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

/**
 * Initialize all the core classes of the theme
 */
if (class_exists('App\\Init')) {
    App\Init::register_services();
}