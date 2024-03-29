<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ladyx
 */

get_header(); ?>

<section role="main">
  <div class="dd_wpth_bl_store">
    <?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <div class="entry-meta">
          <?php
							$metadata = wp_get_attachment_metadata();
							printf( __( 'Published <span class="entry-date"><time class="entry-date" datetime="%1$s">%2$s</time></span> at <a href="%3$s">%4$s &times; %5$s</a> in <a href="%6$s" rel="gallery">%7$s</a>', 'ladyx' ),
								esc_attr( get_the_date( 'c' ) ),
								esc_html( get_the_date() ),
								esc_url( wp_get_attachment_url() ),
								$metadata['width'],
								$metadata['height'],
								esc_url( get_permalink( $post->post_parent ) ),
								get_the_title( $post->post_parent )
							);

							edit_post_link( __( 'Edit', 'ladyx' ), '<span class="edit-link">', '</span>' );
						?>
        </div>
        <!-- .entry-meta -->
        <nav role="navigation" id="image-navigation" class="image-navigation">
          <div class="nav-previous">
            <?php previous_image_link( false, __( '<span class="meta-nav">&larr;</span> Previous', 'ladyx' ) ); ?>
          </div>
          <div class="nav-next">
            <?php next_image_link( false, __( 'Next <span class="meta-nav">&rarr;</span>', 'ladyx' ) ); ?>
          </div>
        </nav>
        <!-- #image-navigation -->
      </header>
      <!-- .entry-header -->
      <div class="entry-content">
        <div class="entry-attachment">
          <div class="attachment">
            <?php ladyx_the_attached_image(); ?>
          </div>
          <!-- .attachment -->
          <?php if ( has_excerpt() ) : ?>
          <div class="entry-caption">
            <?php the_excerpt(); ?>
          </div>
          <!-- .entry-caption -->
          <?php endif; ?>
        </div>
        <!-- .entry-attachment -->
        <?php
						the_content();
						wp_link_pages( array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'ladyx' ),
							'after'  => '</div>',
						) );
					?>
      </div>
      <!-- .entry-content -->
      <?php edit_post_link( __( 'Edit', 'ladyx' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
    </article>
    <!-- #post-## -->
    <?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>
    <?php endwhile; // end of the loop. ?>
  </div>
</section>
<?php get_footer(); ?>
