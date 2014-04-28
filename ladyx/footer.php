<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Ladyx
 */
?>

<footer role="contentinfo">
  <div class="in_foot dd_marg">
    <div class="dd_wpth_bl">
      <div class="lady_foot_bl"> <?php echo apply_filters( 'ladyx_copy', '<span class="copy_lady-x back_line">' . __( 'Copyrights 2013, Lady X. All rights Reserved', 'Ladyx' ) . '</span>' ); ?> <?php echo apply_filters( 'ladyx_lang', '<a class="lady_x_land lk_arrow_" href="">' . __( 'English', 'Ladyx' ) . '</a>' ); ?> <?php echo apply_filters( 'ladyx_news', '<a class="lady_x_news back_line_" href="">' . __( 'Newsletter Sign up', 'Ladyx' ) . '</a>' ); ?> </div>
      <div class="lady_x_socials"> <?php echo apply_filters( 'ladyx_social_face', '<a class="lady_x_face" href="http://www.facebook.com" target="_blank">' . __( '', 'Ladyx' ) . '</a>' ); ?> <?php echo apply_filters( 'ladyx_social_twitter', '<a class="lady_x_twitt" href="http://www.twitter.com" target="_blank">' . __( '', 'Ladyx' ) . '</a>' ); ?> </div>
      <img class="lady_x_payment dd_fix_right" src="<?php echo get_template_directory_uri(); ?>/img/icons/payments.png" /> </div>
  </div>
</footer>
<div class="clr"></div>
</div>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js"></script>
<!-- the jScrollPane script -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.contentcarousel.js"></script>
<script type="text/javascript">
			$('#ca-container').contentcarousel();
		</script>
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>
		<script defer src="js/plugins.js"></script>
		<script defer src="js/script.js"></script>
		<script>
		window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
		Modernizr.load({
		load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
		});
		</script>
		<!--[if lt IE 7 ]>
		<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
<?php wp_footer(); ?>
</body></html>