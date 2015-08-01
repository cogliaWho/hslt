<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <!--[if lt IE 9]>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- get the logo image from the library  -->
<?php
global $wpdb;
$query = "SELECT ID FROM {$wpdb->prefix}posts WHERE post_name LIKE 'headerLogo' AND post_type LIKE 'attachment'";
$thumb_id = $wpdb->get_var($query);
if( !is_null($thumb_id) ) {
    $attachment = wp_get_attachment_image_src($thumb_id, 'full');
    $img_url = $attachment[0];
}
 ?>

<header id="masthead" class="site-header" role="banner">
  <div class="header-topBarColor"></div>
  <div class="header-topBar">
    <div class="center-column">
      <?php wp_nav_menu(  array( 'theme_location' => 'header-top-navigation' ));  ?>
    </div>
  </div>
  <div class="header-wrap">
    <div class="header-top-navigation">
      <div class="header-logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
          <img src="<?php echo $img_url ?>"/>
        </a>
      </div>
      <div class="header-text">
        <p>È ricercando l'impossibile che l'uomo ha sempre realizzato il possibile.</p>
      </div>
    </div>
      <?php wp_nav_menu(  array( 'theme_location' => 'header-menu' ));  ?>
  </div>
</header>

<div id="page" class="hfeed site main-container">


  <!-- <div id="content" class="site-content"> -->
