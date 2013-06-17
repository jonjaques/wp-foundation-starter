<?php

include_once(dirname(__FILE__) . '/includes/scripts.php');
include_once(dirname(__FILE__) . '/includes/styles.php');
// include_once(dirname(__FILE__) . '/includes/nav-menu-template.php');

/**
 * Asset Registration
 */
if (!is_admin()) {
  add_action('wp_enqueue_scripts', 'enqueue_theme_scripts');
  add_action('wp_enqueue_scripts', 'enqueue_theme_styles');
}

/**
 * Features
 */
add_theme_support('post-thumbnails');
add_editor_style('media/css/base.css');
add_editor_style('media/css/editor.css');

/**
 * Menus
 */
register_nav_menu('primary', 'Primary Nav');
