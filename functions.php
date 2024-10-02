<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @link https://github.com/timber/starter-theme
 */

namespace App;

use Timber\Timber;

// Load Composer dependencies.
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/StarterSite.php';

Timber::init();

new StarterSite();

// Config for https://github.com/TCattd/HTMX-API-WP
// Change htmx template path from default /htmx-templates/
add_filter( 'hxwp/get_template_file/templates_path', function( $templates_path ) {
    return __DIR__ . '/views/partials-htmx/';
});
