<?php

/**
 * Init theme class
 */

namespace App;

final class Init
{
    private static array $classes = array(
        Controllers\DizzainTheme::class,
        Controllers\LabelGenerator::class,
        Controllers\RegisterPostType::class,
        CustomGutenberg\RegisterWidgets::class,
        DigitalProducts\DigitalProducts::class,
        Portfolio\Portfolio::class
    );

    /**
     * Loop through the classes, initialize them, and call the register() method if it exists
     *
     * @return void
     */
    public static function register_services()
    {
        foreach (self::$classes as $class) {
            $class::init();
        }
    }
}