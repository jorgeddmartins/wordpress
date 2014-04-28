<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Ladyx
 */

get_header(); ?>
<section role="main">
  <div class="dd_wpth_bl_store">
  <header class="entry-header-blog">
		<h1 class="entry-title">Blog<span class="mini-title">- You&acute;re right here</span></h1>
	</header><!-- .entry-header -->
    <?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php ladyx_content_nav( 'nav-below' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>

		<?php endwhile; // end of the loop. ?>
			
  </div>
</section>

<?php get_footer(); ?>