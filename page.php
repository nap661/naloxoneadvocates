<?php if (!defined('ABSPATH')) exit; get_header(); ?>
<div class="container section">
  <article class="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h1 class="page-title"><?php the_title(); ?></h1>
      <div class="page-content"><?php the_content(); ?></div>
    <?php endwhile; endif; ?>
  </article>
</div>
<?php get_footer(); ?>
