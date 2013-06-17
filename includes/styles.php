<?php

$theme_css = array(
  array(
    'handle' => 'foundation-starter-base',
    'src'    => '/media/css/base.css',
    'ver'    => '4.0'
  ),
  array(
    'handle' => 'foundation-starter-theme',
    'src'    => '/media/css/app.css',
    'ver'    => '0.1a'
  ),
  array(
    'handle' => 'foundation-starter-theme-custom',
    'src'    => '/style.css'
  )
);

function enqueue_theme_styles() {

  global $theme_css;

  foreach($theme_css as $style) {
    if ( wp_style_is($style['handle'], 'registered') ) {
      wp_deregister_style($style['handle']);
    }

    wp_register_style(
      $style['handle'],
      get_template_directory_uri() . $style['src'],
      isset($style['deps'])   ? $style['deps']   : array(),
      isset($style['ver'])    ? $style['ver']    : false,
      isset($style['media'])  ? $style['media']  : false
    );

    wp_enqueue_style($style['handle']);

  }
}