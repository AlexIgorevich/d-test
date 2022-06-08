<?php

/**
 * Class setup  Digital Products post type for WP Theme
 */
namespace App\DigitalProducts;

use App\Helpers\Init;

final class DigitalProducts implements Init
{
    public static function init()
    {
        new RegisterDigitalProducts();
    }
}