<?php
/**
 * The template for displaying search forms in Ladyx
 *
 * @package Ladyx
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'ladyx' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( '', 'placeholder', 'ladyx' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'ladyx' ); ?>">
</form>
