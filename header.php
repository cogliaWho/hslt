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

<?php
  $headerClass = 'header-home';
  if(!is_front_page() && !is_home()):
    $headerClass = '';
  else:
    $headerClass = 'header-home';
  endif;
?>


<header id="masthead" class="site-header <?php echo $headerClass ?>" role="banner">
  <div class="header-wrap">
    <div class="header-logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <img src="<?php echo get_stylesheet_directory_uri() . "/images/logoTemp.jpg" ?>"/>
      </a>
    </div>
    <div class="header-navigation">
      <div class="header-top-navigation">
        <ul id="header-top-nav">
          <li><div class="social-icon"></div></li>
          <li><div class="social-icon"></div></li>
          <li><a href="#">news</a></li>
          <li><a href="#">contatti</a></li>
          <li><a href="#">registrati</a></li>
          <li><a href="#">login</a></li>
          <li><div class="searchBar"></div></li>
        </ul>
      </div>
      <?php wp_nav_menu(  array( 'theme_location' => 'header-menu' ));  ?>
    </div>
  </div>
</header>

<div id="page" class="hfeed site main-container">


  <!-- <div id="content" class="site-content"> -->
