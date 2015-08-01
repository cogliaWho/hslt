  <footer class="site-footer" role="contentinfo">
    <div class="footer-wrap">
      <div class="footer-social-icon">
        <a href="#">
          <img src="<?php echo get_stylesheet_directory_uri() . '/images/fblogo.jpg'?>">
        </a>
      </div>
      <div class="footer-social-icon">
        <a href="#">
          <img src="<?php echo get_stylesheet_directory_uri() . '/images/ytlogo.jpg'?>">
        </a>
      </div>
      <?php wp_nav_menu(  array( 'theme_location' => 'footer-navigation' ));  ?>
    </div>
    <div class="footer-site-links">
      <div class="footer-row">
        <p class="footer-info">
          <b>ASSOCIAZIONE<br/>HANDICAP..SU LA TESTA<br/>ONLUS</b><br/>
          Largo Balestra 1, Milano<br/>
          CF 97141940151<br/>
          <a href="mailto:info@handicapsulatesta.org">info@handicapsulatesta.org</a><br/>
          Tel: 02/48951894<br/>
          Fax: 02/4232445<br/>
          C/C POSTALE n&#176; 37611209<br/>
          Bonifico Bancario Banca Prossima<br/>
          IBAN: IT23I0335901600100000120026
        </p>
      </div>
      <div class="footer-row">
        <ul class="footer-link-list">
          <?php
          $post_58 = get_post( 58 );
          $title = $post_58->post_title;
          ?>
          <li><a href="<?php echo esc_url( get_permalink(58) ); ?>"><?php echo $title; ?></a></li>
          <?php
          wp_list_pages("title_li=&child_of=58");
          ?>
        </ul>
      </div>
      <div class="footer-row">
        <ul class="footer-link-list">
          <?php
          $post_62 = get_post( 62 );
          $title = $post_62->post_title;
          ?>
          <li><a href="<?php echo esc_url( get_permalink(62) ); ?>"><?php echo $title; ?></a></li>
          <?php
          wp_list_pages("title_li=&child_of=62");
          ?>
        </ul>
      </div>
      <div class="footer-row">
        <ul class="footer-link-list">
          <?php
          $post_70 = get_post( 70 );
          $title = $post_70->post_title;
          ?>
          <li><a href="<?php echo esc_url( get_permalink(70) ); ?>"><?php echo $title; ?></a></li>
          <?php
          wp_list_pages("title_li=&child_of=70");
          ?>
        </ul>
      </div>
      <div class="footer-row">
        <ul class="footer-link-list">
          <?php
          $post_66 = get_post( 66 );
          $title = $post_66->post_title;
          ?>
          <li><a href="<?php echo esc_url( get_permalink(66) ); ?>"><?php echo $title; ?></a></li>
          <?php
          wp_list_pages("title_li=&child_of=66");
          ?>
        </ul>
      </div>
    </div>

    <div class="footer-copyright">
      <span>&#169;</span> <p>2015 handicapsulatesta p. iva 5312785479236598236</p>
    </div>

  </footer><!-- .site-footer -->
</div><!-- .site -->


</body>
</html>
