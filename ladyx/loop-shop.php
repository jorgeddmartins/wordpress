<?php
/**
 * Loop shop template
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
<?php
global $columns, $per_page;

do_action('jigoshop_before_shop_loop');

$loop = 0;

if ( ! isset( $columns ) || ! $columns ) $columns = apply_filters( 'loop_shop_columns', 3 );

//only start output buffering if there are products to list
if ( have_posts() ) {
	ob_start();
}

if ( have_posts()) : while ( have_posts() ) : the_post(); $_product = new jigoshop_product( $post->ID ); $loop++;

	?>

<li class="product <?php if ($loop%$columns==0) echo 'last'; if (($loop-1)%$columns==0) echo 'first'; ?>">
  <div class="store_bk_">
    <div class="dd_store_bk_">
      <?php do_action('jigoshop_before_shop_loop_item'); ?>
      <a href="<?php the_permalink(); ?>">
      <div class="im_box_dd">
        <?php do_action('jigoshop_before_shop_loop_item_title', $post, $_product); ?>
        <div class="buy_bag"></div>
      </div>
      </a>
      <div class="dw_info_">
        <?php do_action('jigoshop_after_shop_loop_item_title', $post, $_product); ?>
        <?php do_action('jigoshop_after_shop_loop_item', $post, $_product); ?>
        <strong>
        <?php the_title(); ?>
        </strong>
        <p class="min_desc">Write a Little Description for this Product,Here...</p>
      </div>
    </div>
  </div>
</li>
<?php

	if ( $loop == $per_page ) break;

endwhile; endif;

if ( $loop == 0 ) :

	$content = '<p class="info">'.__('No products found which match your selection.', 'jigoshop').'
</p>
';

else :

	$found_posts = ob_get_clean();

	$content = '
<ul class="products">
  ' . $found_posts . '
</ul>
<div class="clear"></div>
';

endif;

echo apply_filters( 'jigoshop_loop_shop_content', $content );

do_action( 'jigoshop_after_shop_loop' ); 