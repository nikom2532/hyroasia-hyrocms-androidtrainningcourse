<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
 
?>
	<div id="posts" style="
<?php
	if($_GET["page_id"]==5 || $_GET["page_id"]==11 || $_GET["page_id"]==236) echo "width: 620px; position: relative;"; //for id page == 5
	if($_GET["cid"] != "") echo "top: -70px; width: 650px; left: 5px";
?>
	">
		<div id="posts_L_<?php the_ID(); ?>">
<?php 		//the page id == 5 (COURSE OUTLINE)
			if($_GET["page_id"]==5 || $_GET["page_id"]==11 || $_GET["page_id"] == 236 || ($_GET["submit"]=="Search" && $_GET["s"] != "")){
?>
				
<?php				
			}
			//the home page
			else{
?>
				<a href="./CMS_Images/news-<?php the_ID(); ?>.png" rel="lightbox[1]" class="cboxElement"><?php the_post_thumbnail($size,$attr); ?></a>
<?php
				// the_post_thumbnail($size,$attr); ----> is to show thumbnail image from that post.
				// use last function in function.php
			}
?>
		</div>
		<div id="posts_R_<?php the_ID(); ?>">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="<?php if($_GET["page_id"]==11 || $_GET["page_id"]==5) echo "padding:0px 40px 0px 0px;"; ?>">
				<header class="entry-header">
					
								<?php //comment ?>
					
					<?php if ( is_sticky() ) : ?>
						<hgroup>
							<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
							<h3 class="entry-format"><?php _e( 'Featured', 'twentyeleven' ); ?></h3>
						</hgroup>
					<?php else : ?>
					

					
					<?php //child web ?>
					
					<?php if($_GET["page_id"]==5 || $_GET["page_id"]==11 || $_GET["page_id"] == 236 || ($_GET["submit"]=="Search" && $_GET["s"] != "")){
					//
					?>
						<h1 class="entry-title_child">
<?php				}
					else{	//home web
?>
						<h1 class="entry-title" style="text-transform:uppercase;">
<?php
					}
?>
						<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
					</h1>
					
					<?php endif; ?>
		
					<?php if ( 'post' == get_post_type() ) : ?>
					<div class="entry-meta">
						<?php twentyeleven_posted_on(); ?>
					</div><!-- .entry-meta -->
					<?php endif; ?>
		
					<?php if ( comments_open() && ! post_password_required() ) : ?>
						
						<?php /* if($_GET["page_id"]!=5 && $_GET["page_id"]!=11 && $_GET["page_id"] != 236  ){ 
						// remove the answer comment on Course Outline, Contact Us Pages ?>
							<div class="comments-link">
								<?php comments_popup_link( '<span class="leave-reply">' . __( 'Reply', 'twentyeleven' ) . '</span>', _x( '1', 'comments number', 'twentyeleven' ), _x( '%', 'comments number', 'twentyeleven' ) ); ?>
							</div>
						<?php } */ ?>
					
					<?php endif; ?>
				</header><!-- .entry-header -->
		
				<?php if ( is_search() ) : // Only display Excerpts for Search ?>
				<div class="entry-summary">
					<?php the_excerpt(); ?>
				</div><!-- .entry-summary -->
				<?php else : ?>
				<div class="entry-content_home">
					<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
					
					<?php if($_GET["page_id"]==236){ ?>
						






						
					<?php } ?>
					
				</div><!-- .entry-content -->
				<?php endif; ?>
		
				<footer class="entry-meta" style="margin-top: -20px;">
					<?php $show_sep = false; ?>
					<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
					<?php
						/* translators: used between list items, there is a space after the comma */
						$categories_list = get_the_category_list( __( ', ', 'twentyeleven' ) );
						if ( $categories_list ):
					?>
					<span class="cat-links" style="margin-top: -300px;">
						<?php 
						// printf( __( '<span class="%1$s">Posted in</span> %2$s', 'twentyeleven' ), 'entry-utility-prep entry-utility-prep-cat-links', $categories_list );
						?><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark" id="linkReadMore">readmore..</a></span><?php
						$show_sep = true; 
						?>
					</span>
					<?php endif; // End if categories ?>
					<?php
						/* translators: used between list items, there is a space after the comma */
						$tags_list = get_the_tag_list( '', __( ', ', 'twentyeleven' ) );
						if ( $tags_list ):
						if ( $show_sep ) : ?>
					<span class="sep"> | </span>
						<?php endif; // End if $show_sep ?>
					<span class="tag-links">
						<?php printf( __( '<span class="%1$s">Tagged</span> %2$s', 'twentyeleven' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list );
						$show_sep = true; ?>
					</span>
					<?php endif; // End if $tags_list ?>
					<?php endif; // End if 'post' == get_post_type() ?>
		
					<?php if ( comments_open() ) : ?>
					<?php if ( $show_sep ) : ?>
					<!--span class="sep"> | </span-->
					<?php endif; // End if $show_sep ?>
					
					<?php /* if($_GET["page_id"] != 5 && $_GET["page_id"] != 11 && $_GET["page_id"] != 236) { ?>
						<span class="comments-link"><?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'twentyeleven' ) . '</span>', __( '<b>1</b> Reply', 'twentyeleven' ), __( '<b>%</b> Replies', 'twentyeleven' ) ); ?></span>
					
					<?php } */ ?>
						
					<?php endif; // End if comments_open() ?>
			
					<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
					
					
				</footer><!-- #entry-meta -->
			</article><!-- #post-<?php the_ID(); ?> -->
		</div>
	</div>
