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
  <div class="slide_wpth_">
    <div class="dd_wpth_Slidein"> 
    <?php echo apply_filters( 'ladyx_sale', '<span class="sale_txt">' . __( 'SPRING SALES', 'Ladyx' ) . '</span>' ); ?> 
      <div class="dd_ball_shop"> <a href="?post_type=product">
        <div class="dd_in_ball"> 
        <?php echo apply_filters( 'ladyx_shop', '<span class="dd_position_a">' . __( 'SHOP SHOES', 'Ladyx' ) . '</span>' ); ?> 
        </div>
        </a> </div>
      <img src="<?php echo get_template_directory_uri(); ?>/img/slide/fashion.jpg" /> </div>
  </div>
  <div class="dd_wpth_bl_store">
    <?php if ( have_posts() ) : ?>
    <?php /* Start the Loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>
    <?php endwhile; ?>
    <?php ladyx_content_nav( 'nav-below' ); ?>
    <?php else : ?>
    <?php get_template_part( 'no-results', 'index' ); ?>
    <?php endif; ?>
    
  </div>
</section>
<?php get_footer(); ?>
