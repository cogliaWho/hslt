<?php
 /*
 Template Name: livello 2 - Immagine a destra
 */
 ?>

<?php get_header(); ?>

  <main id="primary" class="content-area" role="main">
    <div class="second-level-navigation">
      <?php wp_nav_menu(  array( 'theme_location' => 'second-level-menu' ));  ?>

      <div class="other-links">
        <ul>
          <!--<li><a href="#">bilancio</a></li>
          <li><a href="#">statuto</a></li>-->
          <?php
            $extralinks = rwmb_meta( 'hslt_linkExtra' );

            if (is_array($extralinks))
            {
                foreach ($extralinks as $value)
                {
                    echo '<li>'.$value.'</li>';
                }
            } else {
              echo "Qualcosa è andato storto. Contatta l'amministratore.";
            }
          ?>
        </ul>
      </div>
    </div>

    <div class="livello-uno-body">
      <div class="immagine-livello-uno">
        <?php echo get_the_post_thumbnail(  ); ?>
        <div class="testo-immagine">
          <?php
            $textboxes = rwmb_meta( 'hslt_testoImg' );

            if (is_array($textboxes))
            {
                foreach ($textboxes as $value)
                {
                    echo $value;
                }
            } else {
              echo "Qualcosa è andato storto. Contatta l'amministratore.";
            }
          ?>
        </div>
      </div>
      <div class="testo-livello-uno">
          <?php
          while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                  <?php the_content(); ?> <!-- Page Content -->
          <?php
          endwhile; //resetting the page loop
          wp_reset_query(); //resetting the page query
          ?>
      </div>
    </div>

  </main><!-- .site-main -->

<?php get_footer(); ?>
