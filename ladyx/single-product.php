<?php
/**
 * Product template
 *
 * DISCLAIMER
 *
 * Do not edit or add directly to this file if you wish to upgrade Jigoshop to newer
 * versions in the future. If you wish to customise Jigoshop core for your needs,
 * please use our GitHub repository to publish essential changes for consideration.
 *
 * @package             Jigoshop
 * @category            Catalog
 * @author              Jigoshop
 * @copyright           Copyright © 2011-2013 Jigoshop.
 * @license             http://jigoshop.com/license/commercial-edition
 */
 ?>
<?php get_header('shop'); ?>
<?php do_action('jigoshop_before_main_content'); // <div id="container"><div id="content" role="main"> ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); global $_product; $_product = new jigoshop_product( $post->ID ); ?>
<?php do_action('jigoshop_before_single_product', $post, $_product); ?>

<div class="lady_tit_page"> <?php echo apply_filters( 'jigoshop_products_list_title', '<span class="pg_t">' . __( 'Online Store', 'jigoshop' ) . '</span>' ); ?> <?php echo apply_filters( 'jigoshop_products_list_subtitle', '<span class="pg-sub_t">' . __( '- You’re right here (Product Page)', 'jigoshop' ) . '</span>' ); ?> <?php echo apply_filters( 'jigoshop_products_list_back', '<a class="back_lk pull-left-back" href="?post_type=product">' . __( 'Back to Products', 'jigoshop' ) . '</a>' ); ?> <?php echo apply_filters( 'jigoshop_products_list_prev', '<a class="back_lk" href="">' . __( 'Previous Product', 'jigoshop' ) . '</a>' ); ?> <?php echo apply_filters( 'jigoshop_products_list_trace', '<span class="trace_lk">' . __( '|', 'jigoshop' ) . '</span>' ); ?> <?php echo apply_filters( 'jigoshop_products_list_next', '<a class="back_lk" href="">' . __( 'Next Product', 'jigoshop' ) . '</a>' ); ?> </div>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="prod-stage">
    <?php do_action('jigoshop_before_single_product_summary', $post, $_product); ?>
    <div class="thumbs"> <img class="mini_sr" src="<?php echo get_template_directory_uri(); ?>/img/product/product_2.jpg" /> <img class="mini_sr" src="<?php echo get_template_directory_uri(); ?>/img/product/product_3.jpg" /> <img class="mini_sr" src="<?php echo get_template_directory_uri(); ?>/img/product/product.jpg" /> </div>
  </div>
  <div class="summary">
    <div class="ins_prod">
      <?php do_action( 'jigoshop_template_single_summary', $post, $_product ); ?>
      <form class="prodf_" action="" method="post">
        <ul id="menu">
          <li class="tp_lk"> <a class="l_princ l_back_2" href="">Choose Your Color</a>
            <ul style="display: none; margin-top: 0;">
              <li class="ins_tab"> <a class="l_down back_col_bl" href="#">Black</a> </li>
              <li class="ins_tab"> <a class="l_down back_col_brw" href="#">Brown</a> </li>
              <li class="ins_tab"> <a class="l_down back_col_blu" href="#">Blue</a> </li>
            </ul>
          </li>
          <li class="tp_lk"> <a class="l_princ l_back_3" href="">Choose Your Size</a>
            <ul style="display: none; margin-top: 0;">
              <li class="ins_tab"> <a class="l_down back_col_deful" href="#">36</a> </li>
              <li class="ins_tab"> <a class="l_down back_col_deful" href="#">37</a> </li>
              <li class="ins_tab"> <a class="l_down back_col_deful" href="#">38</a> </li>
              <li class="ins_tab"> <a class="l_down back_col_deful" href="#">39</a> </li>
              <li class="ins_tab"> <a class="l_down back_col_deful" href="#">40</a> </li>
            </ul>
          </li>
        </ul>
      </form>
      
      <a class="Prod_guide" href="">Size Guide »</a> </div>
  </div>
  
  <?php do_action('jigoshop_after_single_product_summary', $post, $_product); ?>
  
  
<?php do_action('jigoshop_after_single_product', $post, $_product); ?>
<?php endwhile; ?>
<?php do_action('jigoshop_after_main_content'); // </div></div> ?>
<?php do_action('jigoshop_sidebar'); ?>
<?php get_footer('shop'); ?>
