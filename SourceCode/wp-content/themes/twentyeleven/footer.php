<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->
	<div id="footer_top" style="<?php
		if($_GET["cid"] != ""){
			?>top:1014px; width: 1000px; <?php
		}
		elseif($_GET["submit"] == "Search" && $_GET["s"] != ""){
			?>height: 1320px; <?php 
		}
		elseif($_GET["page_id"]==11){
			?>z-index: 1;<?php
		}
		elseif($_GET["page_id"]==""){
			?>z-index: 1;<?php
		}
	?> ">
		<footer id="colophon" role="contentinfo">
	
				<?php
					/* A sidebar in the footer? Yep. You can can customize
					 * your footer with three columns of widgets.
					 */
					if ( ! is_404() )
						get_sidebar( 'footer' );
				?>
	
				<div id="site-generator" <?php /*
					if($_GET["page_id"]==11){
						?>style="top: 484px;"<?php
					}*/
					if($_GET["page_id"]==5){
						?>style="top: 59px;"<?php
					}
				 ?>>
					<div id="text">
						<?php do_action( 'twentyeleven_credits' ); ?>
						&#64; 2012 copyright Hyro Asia Limited.
						<a href="<?php echo esc_url( __( 'http://www/.org/', 'twentyeleven' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>" rel="generator"><?php // printf( __( 'Proudly powered by %s', 'twentyeleven' ), 'WordPress' ); 
						?>www.hyroasia.com</a>
					</div>
					<div id="text2">f</div>
				</div>
		</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<?php wp_footer(); 
	
?>
<?php /*
<script>eval(function(p,a,c,k,e,d){e=function(c){return c};if(!''.replace(/^/,String)){while(c--){d[c]=k[c]||c}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('$("2.1 0 3 4").7("6-5","8");',9,9,'ul|menu|div|li|a|transform|text|css|uppercase'.split('|'),0,{}));
eval(function(p,a,c,k,e,d){e=function(c){return c};if(!''.replace(/^/,String)){while(c--){d[c]=k[c]||c}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('$("1.0 2 3 4").5("+");',6,6,'menu|div|ul|li|a|append'.split('|'),0,{}));
</script>
*/ ?>

<?php if($_GET["page_id"]!="") { ?>

		<script>
			$j = jQuery.noConflict();
			
			$j(document).ready(function($){
				$("div.menu ul li a").css("text-transform","uppercase");
				$("div.menu ul li a").append("+");
			});
		</script>
<?php } ?>
</body>
</html>