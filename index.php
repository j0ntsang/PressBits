<?php get_header(); ?>
<main id="content">
  <?php if (have_posts()) : ?>
    <?php if (is_home() && !is_front_page()) : ?>
      <header>
        <h1><?php single_post_title(); ?></h1>
      </header>
    <?php endif; ?>

    <?php
    while (have_posts()) :
      the_post();
      get_template_part('components/shared/content', get_post_type());
    endwhile;

    the_posts_navigation();
    ?>

  <?php else : ?>
    <?php get_template_part('components/shared/content', 'none'); ?>
  <?php endif; ?>
</main>

<?php
get_footer();
