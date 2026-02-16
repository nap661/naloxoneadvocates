<?php if (!defined('ABSPATH')) exit; ?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
  <div class="container nav">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
      <?php if (has_custom_logo()) { the_custom_logo(); } else { bloginfo('name'); } ?>
    </a>
    <button class="nav-toggle" aria-label="Menu" onclick="document.querySelector('.main-nav').classList.toggle('open')">☰</button>
    <nav class="main-nav" role="navigation" aria-label="Primary">
      <?php wp_nav_menu([
        'theme_location' => 'primary',
        'container' => false,
        'menu_class' => 'menu',
        'fallback_cb' => function(){ echo '<ul class="menu"><li><a href="'.esc_url(home_url('/')).'">Home</a></li></ul>'; }
      ]); ?>
    </nav>
  </div>
</header>
<main id="content">
