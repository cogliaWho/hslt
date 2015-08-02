<?php
 /*
 Template Name: Home Page
 */
 ?>

<?php get_header(); ?>

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
          $feat_image = wp_get_attachment_url( get_post_thumbnail_id($recent["ID"]) );
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
      <div class="hp-custom-box">
        <?php
              $linkPage1 = rwmb_meta( 'hslt_hpLinkPageBox1' );
              $linkNews1 = rwmb_meta( 'hslt_hpLinkNewsBox1' );

              if($linkPage1 != '')
              {
                $link1 = esc_url( get_permalink($linkPage1) );
              } else if($linkNews1 != ''){
                $link1 = esc_url( get_permalink($linkNews1) );
              } else {
                $link1 = '#';
              }
        ?>
        <a href="<?php echo $link1; ?>">
          <?php
              $text1 = rwmb_meta( 'hslt_hpTxtBox1' );
              $img1 = rwmb_meta( 'hslt_hpImgBox1' );
              $txt1Class = "customBox-txtWimg";
              $img1Class = "customBox-imgWtxt";

              if($text1 == '')
              {
                $txt1Class = "customBox-hide";
                $img1Class = "customBox-imgOnly";
              }
              if(wp_get_attachment_image( $img1 ) == '')
              {
                $txt1Class = "customBox-txtOnly";
                $img1Class = "customBox-hide";
              }
          ?>
          <div class="<?php echo $img1Class; ?>">
            <?php echo wp_get_attachment_image( $img1 ); ?>
          </div>
          <div class="<?php echo $txt1Class; ?>">
            <p><?php echo $text1; ?></p>
          </div>
        </a>
      </div>
      <div class="hp-custom-box">
        <?php
              $linkPage2 = rwmb_meta( 'hslt_hpLinkPageBox2' );
              $linkNews2 = rwmb_meta( 'hslt_hpLinkNewsBox2' );

              if($linkPage2 != '')
              {
                $link2 = esc_url( get_permalink($linkPage2) );
              } else if($linkNews1 != ''){
                $link2 = esc_url( get_permalink($linkNews2) );
              } else {
                $link2 = '#';
              }
        ?>
        <a href="<?php echo $link2; ?>">
          <?php
              $text2 = rwmb_meta( 'hslt_hpTxtBox2' );
              $img2 = rwmb_meta( 'hslt_hpImgBox2' );
              $txt2Class = "customBox-txtWimg";
              $img2Class = "customBox-imgWtxt";

              if($text2 == '')
              {
                $txt2Class = "customBox-hide";
                $img2Class = "customBox-imgOnly";
              }
              if(wp_get_attachment_image( $img2 ) == '')
              {
                $txt2Class = "customBox-txtOnly";
                $img2Class = "customBox-hide";
              }
          ?>
            <div class="<?php echo $img2Class; ?>">
              <?php  echo wp_get_attachment_image( $img2 ); ?>
            </div>
            <div class="<?php echo $txt2Class; ?>">
              <p><?php  echo $text2; ?></p>
            </div>
          </a>
      </div>
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
