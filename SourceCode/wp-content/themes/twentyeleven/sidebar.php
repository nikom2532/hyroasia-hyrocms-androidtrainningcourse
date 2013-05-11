<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>


		
	<div id="secondary" class="widget-area" role="complementary">
		<?php 
		if($_GET["page_id"]==11){ ?><span style="color: #1982D1;font-size: 20px;position: relative;margin-bottom: 10px;">DOWNLOAD MAP</span><br/><img src="./CMS_Images/map-small.png" /><?php }
		?>
		<img src="./CMS_Images/banner-1.png" /><Br/ >
		<img src="./CMS_Images/banner-2.png" /><Br/ >
		<div id="makeLine_sideHome"></div>
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="archives" class="widget">
				<h3 class="widget-title"><?php _e( 'Archives', 'twentyeleven' ); ?></h3>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>

			<aside id="meta" class="widget">
				<h3 class="widget-title"><?php _e( 'Meta', 'twentyeleven' ); ?></h3>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>
		<?php endif; // end sidebar widget area ?>
		<div id="makeLine_sideHome" style="margin-top: -20px"></div>
		<?php //######## Facebook Page ############# 
		if($_GET["page_id"]!=11){
?>			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
			
			<div class="fb-like-box" data-href="https://www.facebook.com/HyroAsia" data-width="292" data-show-faces="true" data-stream="true" data-header="true"></div>
<?php	}
		//######### End facebook page ######## ?>
		
	</div><!-- #secondary .widget-area -->
<?php endif; ?>