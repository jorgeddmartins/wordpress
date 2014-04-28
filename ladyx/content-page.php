<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Ladyx
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?> <?php echo apply_filters( 'ladyx_sutitle', '<span class="pg-sub_t">' . __( '- You are right Here', 'Ladyx' ) . '</span>' ); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'ladyx' ),
				'after'  => '</div>',
			) );
		?>
        
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'ladyx' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
