<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" <? language_attributes() ?>> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" <? language_attributes() ?>><!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <meta http-equiv="Content-Type"
        content="<? bloginfo('html_type') ?>; charset=<? bloginfo('charset') ?>" />

  <title><?php bloginfo('name') ?> | <?php is_home() ? bloginfo('description') : wp_title() ?></title>

  <link rel="alternate"
        type="application/rss+xml"
        title="<? bloginfo('name') ?> RSS Feed"
        href="<? bloginfo('rss2_url') ?>" />

  <link rel="pingback" href="<? bloginfo('pingback_url') ?>" />

  <!-- header includes -->
  <? wp_head() ?>
  <!-- /header includes -->
</head>
<body <? body_class() ?>>

<div id="container">

  <header class="row" id="header">
    <div class="large-12 columns">
      <? if (is_home()) : ?>
        <h1 id="branding"><? bloginfo('name') ?></h1>
      <? else : ?>
        <strong id="branding"><? bloginfo('name') ?></strong>
      <? endif; ?>
      <hr />
    </div>
  </header><!-- /#header -->