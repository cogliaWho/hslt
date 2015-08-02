<?php
 /*
 Template Name: Pagine Livello 1
 */
 ?>

<?php get_header(); ?>

  <main id="primary" class="content-area" role="main">
    <div class="second-level-navigation">
      <?php
        if($post->post_parent)
          $children = wp_list_pages("sort_column=menu_order&title_li=&child_of=".$post->post_parent."&echo=0");
        else
          $children = wp_list_pages("sort_column=menu_order&title_li=&child_of=".$post->ID."&echo=0");
        if ($children) {
      ?>
      <div class="menu-secondo-livello-container">
        <ul id="menu-secondo-livello" class="menu">
          <?php echo $children; ?>
        </ul>
      </div>
      <?php } ?>

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
