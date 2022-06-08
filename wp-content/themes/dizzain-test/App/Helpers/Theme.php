<?php
/**
 * Theme configuration class
 */

namespace App\Helpers;

abstract class Theme
{
    /**
     * Rewrite add_theme_support in OOP
     *
     * @link    https://developer.wordpress.org/reference/functions/add_theme_support/
     * @param $feature
     * @param null $options
     */
    protected static function addSupport($feature, $options = null)
    {
        self::actionAfterSetup(function () use ($feature, $options) {
            if ($options) {
                add_theme_support($feature, $options);
            } else {
                add_theme_support($feature);
            }
        });
    }

    /**
     * Rewrite add_theme_support in OOP
     *
     * @link    https://developer.wordpress.org/reference/hooks/after_setup_theme/
     */
    private static function actionAfterSetup($function)
    {
        add_action('after_setup_theme', function () use ($function) {
            $function();
        });
    }

    /**
     * Add register_nav_menus in OOP
     *
     * @link    https://developer.wordpress.org/reference/functions/register_nav_menus/
     * @param array $locations
     */
    protected static function addNavMenus($locations = array())
    {
        self::actionAfterSetup(function () use ($locations) {
            register_nav_menus($locations);
        });
    }

    /**
     * Add add_image_size in OOP
     *
     * @link    https://developer.wordpress.org/reference/functions/add_image_size/
     * @param string $name
     * @param int $width
     * @param int $height
     * @param bool $crop
     */
    protected static function addImageSize($name, $width, $height, $crop = false)
    {
        self::actionAfterSetup(function () use ($name, $width, $height, $crop) {
            add_image_size($name, $width, $height, $crop);
        });
    }
}