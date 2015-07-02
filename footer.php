  <footer class="site-footer" role="contentinfo">
    <div class="footer-wrap">
      <?php wp_nav_menu(  array( 'theme_location' => 'footer-navigation' ));  ?>
      <div class="footer-info">
        <p>C handicapsulatesta p. iva 5312785479236598236</p>
      </div>
      <div class="footer-dona-btn" style="background-image: url('<?php echo get_stylesheet_directory_uri() . '/images/donaTemp.png'?>');">

      </div>
    </div>
  </footer><!-- .site-footer -->
</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
