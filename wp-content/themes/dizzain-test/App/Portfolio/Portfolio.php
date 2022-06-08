<?php

/**
 * Class setup  Portfolio post type for WP Theme
 */
namespace App\Portfolio;

use App\Helpers\Init;

final class Portfolio implements Init
{
    public static function init()
    {
        new RegisterPortfolio();
    }
}