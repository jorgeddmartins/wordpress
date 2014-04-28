<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Ladyx
 */
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>>
	<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon_lad.ico">
<!-- Standard iPhone -->
<link rel="apple-touch-icon" sizes="57x57" href="touch-icon-iphone-114.png" />
<!-- Retina iPhone -->
<link rel="apple-touch-icon" sizes="114x114" href="touch-icon-iphone-114.png" />
<!-- Standard iPad -->
<link rel="apple-touch-icon" sizes="72x72" href="touch-icon-ipad-144.png" />
<!-- Retina iPad -->
<link rel="apple-touch-icon" sizes="144x144" href="touch-icon-ipad-144.png" />
<title>
<?php wp_title( '|', true, 'right' ); ?>
</title>
<meta name="description" content="WordPress Theme for Shoes Fashion">
<meta name="author" content="Jorge DD Martins">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/car.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/jigoshop/import.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/hover.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css">
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/mylibs/jquery.lightbox_me.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/mylibs/jquery.menu.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/toggle.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/viewport.js"></script>
<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
<script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr-2.0.6.min.js"></script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="dd_wpth_">
<?php do_action( 'before' ); ?>
<header role="banner">
  <div class="in_head dd_marg">
    <div class="dd_wpth_bl">
      <div class="lg_box_dd"><img class="dd_position_r" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" /> </div>
      <?php echo apply_filters( 'ladyx_search', '<a id="search" class="search" href="">' . __( '', 'Ladyx' ) . '</a>' ); ?> 
      <div id="search_box">
        <!-- pop up -->
        <div role="application" class="dd_position_r">
          <div class="tab_details dd_width dd_display_inbl"> 
          <?php echo apply_filters( 'ladyx_search', '<span class="tit_search">' . __( 'Search Products', 'Ladyx' ) . '</span>' ); ?> 
            <?php get_search_form(); ?>
          <?php echo apply_filters( 'ladyx_search_txt', '<span class="key_bt dd_width">' . __( 'Use Key &quot;Enter&quot; to make the Search', 'Ladyx' ) . '</span>' ); ?>
            </div>
           <?php echo apply_filters( 'ladyx_closenav', '<a id="close_pop" class="close" title="Click to Close" href="#">' . __( '', 'Ladyx' ) . '</a>' ); ?> 
           </div>
      </div>
      <!-- END POP -->
      <?php echo apply_filters( 'ladyx_mobmenu', '<a id="mobmenu" class="mob_menu" href="">' . __( '', 'Ladyx' ) . '</a>' ); ?> 
      <div id="mobile_nav">
        <div role="application" class="dd_position_r">
          <div class="shop_mob_ dd_width dd_display_inbl"> 
          <?php echo apply_filters( 'ladyx_home', '<a class="shop_lk" href="index.php">' . __( 'Home', 'Ladyx' ) . '</a>' ); ?> 
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
          </div>
          <?php echo apply_filters( 'ladyx_closenav', '<a id="close_pop" class="close" title="Click to Close" href="#">' . __( '', 'Ladyx' ) . '</a>' ); ?>
          </div>
      </div>     
      <div class="lady_x_shopcar dd_fix_right">       
     <a href="<?php echo esc_url( jigoshop_cart::get_cart_url() ); ?>"><img class="bag" src="<?php echo get_template_directory_uri(); ?>/img/icons/bag.png" /></a>    
                                    <?php
                                    $price = jigoshop_cart::$cart_contents_total_ex_tax + jigoshop_cart::$shipping_total;
									$price = jigoshop_price($price, array('ex_tax_label' => 0));
                                    ?> 
      <span class="bag-count"><?php echo $price; ?></span> 
      </div>
      
      <nav role="navigation" class="dd_fix_right"> 
      <?php echo apply_filters( 'ladyx_home', '<a class="top_nav" href="index.php">' . __( 'Home', 'Ladyx' ) . '</a>' ); ?>     
      <?php echo apply_filters( 'ladyx_shoponline', '<a id="shoponline" class="top_nav nav_arrow" href="">' . __( 'Shop Online', 'Ladyx' ) . '</a>' ); ?> 
        <div id="shop_online">
          <!-- pop up -->
          <div role="application" class="dd_position_r">
            <div class="shop_menu_ dd_width dd_display_inbl">
              <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            </div>
            <?php echo apply_filters( 'ladyx_closenav', '<a id="close_pop" class="close" title="Click to Close" href="#">' . __( '', 'Ladyx' ) . '</a>' ); ?>             
            </div>
        </div>
        <!-- END POP -->
        <?php echo apply_filters( 'ladyx_about', '<a class="top_nav" href="?page_id=2">' . __( 'About Us', 'Ladyx' ) . '</a>' ); ?> 
        <?php echo apply_filters( 'ladyx_blog', '<a class="top_nav" href="?page_id=2">' . __( 'Blog', 'Ladyx' ) . '</a>' ); ?> 
        <?php echo apply_filters( 'ladyx_contact_us', '<a class="top_nav" href="?page_id=2">' . __( 'Contact Us', 'Ladyx' ) . '</a>' ); ?> 
        <?php echo apply_filters( 'ladyx_trace', '<span class="separate_nav_dd">' . __( '|', 'Ladyx' ) . '</span>' ); ?>
        <?php echo apply_filters( 'ladyx_shopping', '<a class="top_nav" href="?post_type=product">' . __( 'More Shopping', 'Ladyx' ) . '</a>' ); ?> 
        <?php echo apply_filters( 'ladyx_login', '<a class="top_nav" href="wp-login.php">' . __( 'Login', 'Ladyx' ) . '</a>' ); ?>
    </div>
  </div>
</header>
<section role="main">