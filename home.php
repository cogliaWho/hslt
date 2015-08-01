<?php
/**
 * The main template file
 */

get_header(); ?>

<main id="primary" class="content-area" role="main">
  <?php
    echo do_shortcode('[pjc_slideshow slide_type="homepageslide"]');
  ?>

  <div class="hp-boxes">
    <div class="hp-column">
      <?php
        $args = array( 'numberposts' => '2' );
        $recent_posts = wp_get_recent_posts( $args );
        foreach( $recent_posts as $recent ){
          $feat_image = wp_get_attachment_url( get_post_thumbnail_id($recent->ID) );
      ?>
        <div class="hp-news-box">
          <a href="<?php echo get_permalink($recent["ID"]); ?>">
            <div class="news-thumb" style="background-image: url('<?php echo $feat_image; ?>')"></div>
            <div class="news-content">
              <h2><?php echo $recent["post_title"]; ?></h2>
              <p><?php echo $recent["post_content"]; ?></p>
            </div>
          </a>
        </div>
      <?php
        }
      ?>
    </div>
    <div class="hp-column">
      <div class="hp-custom-box"></div>
      <div class="hp-custom-box"></div>
    </div>
    <div class="hp-column">
      <div class="hp-dona-box">
        <div class="hp-dona-thumb">
          <?php
          global $wpdb;
          $query = "SELECT ID FROM {$wpdb->prefix}posts WHERE post_name LIKE 'donaOra' AND post_type LIKE 'attachment'";
          $thumb_id = $wpdb->get_var($query);
          if( !is_null($thumb_id) ) {
              $attachment = wp_get_attachment_image_src($thumb_id, 'full');
              $img_url = $attachment[0];
          }
           ?>
          <img src="<?php echo $img_url ?>"/>
        </div>
        <div class="hp-dona-links">
          <a href="#">> SEI UN PRIVATO?</a><br/>
          <a href="#">> SEI UN'AZIENDA?</a>
        </div>
      </div>
      <div class="hp-cinquepermille-box">
        <p>
          Fai la tua dichiarazione d'amore!<br/>
          5x1000<br/>
          <span>CF 97141940151</span>
        </p>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
