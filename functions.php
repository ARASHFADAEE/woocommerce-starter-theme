<?php

/**
 * define themeassets url and dir
 * 
 * @return void
 * 
 */


define('THEME_URL', get_template_directory_uri());
define('THEME_DIR', get_template_directory());
define('ASSETS_URL', THEME_URL . '/assets');
define('ASSETS_DIR', THEME_DIR . '/assets');


/**
 * add theme support
 * 
 * @return void
 */

function theme_support() {
    add_theme_support('woocommerce');
    add_theme_support('title');
    add_theme_support('thumbnail');
    add_theme_support('custom-logo');

}

add_action('after_setup_theme', 'theme_support');








?>