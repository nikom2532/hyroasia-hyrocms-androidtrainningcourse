<?php
/**
 * The main template file.
 *
 * Template Name: Hyro_Course_template
 * 
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>

		<div id="primary" style="<?php // if($_GET["page_id"]==5 || $_GET["page_id"]==11) echo "height: 0px;" ?>">
			<div id="content" role="main">

				<?php if ( have_posts() ) : ?>

					<?php if($_GET["page_id"]==236){ ?>
						<?php //twentyeleven_content_nav( 'nav-above' ); ?>
						
						<?php	//start count id
						$_SESSION["post_id"]=1; $post_id = $_SESSION["post_id"]; ?>
		
						<?php /* Start the Loop */ ?>
						
						<div class="content_posts" >

							<!-- <a href="./?page_id=236" id="home_button_view_all">VIEW ALL &#62;</a> -->
		
							<a href="#" id="home_button_view_all">VIEW ALL &#62;</a>
							
						</div>
							
						<?php	//clear session of count id
							$_SESSION["post_id"]="";
						?>
						
						<?php //end SESSION post_id ?>
					
<?php 
						} //end if 
						else{
							twentyeleven_content_nav( 'nav-above' ); ?>
			
							<?php //Start the Loop ?>
							<?php while ( have_posts() ) : the_post(); ?>
			
								<?php get_template_part( 'content', get_post_format() ); ?>
			
							<?php endwhile; ?>
			
							<?php //twentyeleven_content_nav( 'nav-below' );
					
						}
					?>
	
				<?php else : ?>
	
					<article id="post-0" class="post no-results not-found">
						<header class="entry-header">
							<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
						</header><!-- .entry-header -->
	
						<div class="entry-content">
							<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
							<?php get_search_form(); ?>
						</div><!-- .entry-content -->
					</article><!-- #post-0 -->
	
				<?php  endif; ?>
					

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
