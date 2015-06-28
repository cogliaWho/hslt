<?php
/**
 * The template for displaying pages
 */
get_header(); ?>

  <main id="primary" class="content-area" role="main">

    <?php
    // Start the loop.
    while ( have_posts() ) : the_post();

      // Include the page content template.
      get_template_part( 'content', 'page' );

    // End the loop.
    endwhile;
    ?>

  </main><!-- .site-main -->

<?php get_footer(); ?>
