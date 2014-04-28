<?php
/**
 * Archive template
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
<?php do_action('jigoshop_before_main_content'); ?>
<?php if (is_search()) : ?>

<h1 class="page-title">
  <?php _e('Search Results:', 'jigoshop'); ?>
  &ldquo;
  <?php the_search_query(); ?>
  &rdquo;
  <?php if (get_query_var('paged')) echo ' &mdash; Page '.get_query_var('paged'); ?>
</h1>
<?php else : ?>
<div class="lady_tit_page"> <?php echo apply_filters( 'jigoshop_products_list_title', '<span class="pg_t">' . __( 'Online Store', 'jigoshop' ) . '</span>' ); ?> <?php echo apply_filters( 'jigoshop_products_list_subtitle', '<span class="pg-sub_t">' . __( '- You’re right here', 'jigoshop' ) . '</span>' ); ?> </div>
<?php endif; ?>
<div class="slide_wpth_list">
  <div class="dd_wpth_Slidein"> <img src="<?php echo get_template_directory_uri(); ?>/img/slide/store.jpg" /> </div>
</div>
<div class="lady_store_info"> <?php echo apply_filters( 'jigoshop_products_list_nprod', '<span class="nprod">' . __( '500 Products', 'jigoshop' ) . '</span>' ); ?> <?php echo apply_filters( 'jigoshop_products_list_prev_pg', '<a class="prev_pg" href="">' . __( 'Previous Page', 'jigoshop' ) . '</a>' ); ?> <?php echo apply_filters( 'jigoshop_products_list_nex_pg', '<a class="nex_pg" href="">' . __( 'Next Page', 'jigoshop' ) . '</a>' ); ?> <?php echo apply_filters( 'jigoshop_products_list_filter', '<a class="filter" href="">' . __( 'Filter by', 'jigoshop' ) . '</a>' ); ?> <?php echo apply_filters( 'jigoshop_products_list_sort', '<a class="sort" href="">' . __( 'Sort by', 'jigoshop' ) . '</a>' ); ?> </div>
<div class="dd_wpth_bl_store lady_store_tp">
  <?php
		$shop_page_id = jigoshop_get_page_id('shop');
		$shop_page = get_post($shop_page_id);
		echo apply_filters('the_content', $shop_page->post_content);
	?>
  <?php 
	ob_start();
	jigoshop_get_template_part( 'loop', 'shop' );
	$products_list_html = ob_get_clean();
	echo apply_filters( 'jigoshop_products_list', $products_list_html );
	?>
  <?php do_action('jigoshop_pagination'); ?>
  <?php do_action('jigoshop_after_main_content'); ?>
  <?php do_action('jigoshop_sidebar'); ?>
  <?php get_footer('shop'); ?>
</div>
