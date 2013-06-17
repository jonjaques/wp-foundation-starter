<?php

$theme_scripts = array(
  array(
    'handle'    => 'jquery',
    'src'       => '//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js',
    'ver'       => '1.9.1',
    'in_footer' => true
  ),
  array(
    'handle'    => 'modernizr-custom',
    'src'       => '/media/js/vendor/custom.modernizr.js',
    'ver'       => '0.0.1',
    'theme'     => true
  ),
  array(
    'handle'    => 'zurb-foundation',
    'src'       => '/media/js/foundation/foundation.js',
    'deps'      => array('jquery'),
    'ver'       => '4.0.9',
    'in_footer' => true,
    'theme'     => true
  ),
  array(
    'handle'    => 'zurb-foundation-alerts',
    'src'       => '/media/js/foundation/foundation.alerts.js',
    'deps'      => array('zurb-foundation'),
    'ver'       => '4.0.9',
    'in_footer' => true,
    'theme'     => true
  ),
  array(
    'handle'    => 'zurb-foundation-clearing',
    'src'       => '/media/js/foundation/foundation.clearing.js',
    'deps'      => array('zurb-foundation'),
    'ver'       => '4.0.9',
    'in_footer' => true,
    'theme'     => true
  ),
  array(
    'handle'    => 'zurb-foundation-cookie',
    'src'       => '/media/js/foundation/foundation.cookie.js',
    'deps'      => array('zurb-foundation'),
    'ver'       => '4.0.9',
    'in_footer' => true,
    'theme'     => true
  ),
  array(
    'handle'    => 'zurb-foundation-dropdown',
    'src'       => '/media/js/foundation/foundation.dropdown.js',
    'deps'      => array('zurb-foundation'),
    'ver'       => '4.0.9',
    'in_footer' => true,
    'theme'     => true
  ),
  array(
    'handle'    => 'zurb-foundation-forms',
    'src'       => '/media/js/foundation/foundation.forms.js',
    'deps'      => array('zurb-foundation'),
    'ver'       => '4.0.9',
    'in_footer' => true,
    'theme'     => true
  ),
  array(
    'handle'    => 'zurb-foundation-joyride',
    'src'       => '/media/js/foundation/foundation.joyride.js',
    'deps'      => array('zurb-foundation'),
    'ver'       => '4.0.9',
    'in_footer' => true,
    'theme'     => true
  ),
  array(
    'handle'    => 'zurb-foundation-magellan',
    'src'       => '/media/js/foundation/foundation.magellan.js',
    'deps'      => array('zurb-foundation'),
    'ver'       => '4.0.9',
    'in_footer' => true,
    'theme'     => true
  ),
  array(
    'handle'    => 'zurb-foundation-orbit',
    'src'       => '/media/js/foundation/foundation.orbit.js',
    'deps'      => array('zurb-foundation'),
    'ver'       => '4.0.9',
    'in_footer' => true,
    'theme'     => true
  ),
  array(
    'handle'    => 'zurb-foundation-placeholder',
    'src'       => '/media/js/foundation/foundation.placeholder.js',
    'deps'      => array('zurb-foundation'),
    'ver'       => '4.0.9',
    'in_footer' => true,
    'theme'     => true
  ),
  array(
    'handle'    => 'zurb-foundation-reveal',
    'src'       => '/media/js/foundation/foundation.reveal.js',
    'deps'      => array('zurb-foundation'),
    'ver'       => '4.0.9',
    'in_footer' => true,
    'theme'     => true
  ),
  array(
    'handle'    => 'zurb-foundation-section',
    'src'       => '/media/js/foundation/foundation.section.js',
    'deps'      => array('zurb-foundation'),
    'ver'       => '4.0.9',
    'in_footer' => true,
    'theme'     => true
  ),
  array(
    'handle'    => 'zurb-foundation-tooltips',
    'src'       => '/media/js/foundation/foundation.tooltips.js',
    'deps'      => array('zurb-foundation'),
    'ver'       => '4.0.9',
    'in_footer' => true,
    'theme'     => true
  ),
  array(
    'handle'    => 'zurb-foundation-topbar',
    'src'       => '/media/js/foundation/foundation.topbar.js',
    'deps'      => array('zurb-foundation'),
    'ver'       => '4.0.9',
    'in_footer' => true,
    'theme'     => true
  ),
  array(
    'handle'    => 'foundation-starter-app',
    'src'       => '/media/js/app.js',
    'deps'      => array( 'zurb-foundation',
                          'zurb-foundation-alerts',
                          'zurb-foundation-clearing',
                          'zurb-foundation-cookie',
                          'zurb-foundation-dropdown',
                          'zurb-foundation-forms',
                          'zurb-foundation-joyride',
                          'zurb-foundation-magellan',
                          'zurb-foundation-orbit',
                          'zurb-foundation-placeholder',
                          'zurb-foundation-reveal',
                          'zurb-foundation-section',
                          'zurb-foundation-tooltips',
                          'zurb-foundation-topbar' ),
    'ver'       => '0.1',
    'in_footer' => true,
    'theme'     => true
  )
);

function enqueue_theme_scripts() {

  global $theme_scripts;

  foreach($theme_scripts as $script) {

    if ( wp_script_is($script['handle'], 'registered') ) {
      wp_deregister_script($script['handle']);
    }

    if ( isset($script['theme']) ) {
      $script['src'] = get_template_directory_uri() . $script['src'];
    }

    wp_register_script(
      $script['handle'],
      isset($script['src'])       ? $script['src']        : false,
      isset($script['deps'])      ? $script['deps']       : array(),
      isset($script['ver'])       ? $script['ver']        : false,
      isset($script['in_footer']) ? $script['in_footer']  : false
    );

    wp_enqueue_script($script['handle']);

  }

}