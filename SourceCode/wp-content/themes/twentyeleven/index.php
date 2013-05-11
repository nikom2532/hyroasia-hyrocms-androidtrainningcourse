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
 * @package WordPress
 * @subpackage Twenty_Eleven
 */
 if($_GET["page_id"]==""){
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js "></script>

<?php
 }
get_header(); query_posts( 'posts_per_page=-1&amp;cat=' . $cat ) ?>

		<div id="primary" style="<?php if($_GET["page_id"]==5 || $_GET["page_id"]==236 || $_GET["cid"] != "") echo "height: 0px;" ?>">
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

<?php 			//### Head bottom ###
				if($_GET["cid"] == ""){
?>
					<div id="head_bottom">
						<div id="title">
							Course: Basic Android Application Application Development
						</div>
						<div id="topic">1. Introduct to Android : </div> get to know more about Android<br />
						<div id="topic">2. Android Structure : </div> Android project structures and contents.<br />
						<div id="topic">3. Activity : </div> Know how android application works<br />
						<div id="topic">4. UI : </div> Create and manipulate android user interface.<br />
						<div id="topic">5. Menu, </div> Dialog and proference : Fulfill the application<br />
						<div id="topic">6. Google API : </div> Create and usinglcation base service.<br />
						<div id="topic">7. Facebook API : </div> Integrate to facebook and use its APIs.<br />
						<div id="topic">8. Export and sign : </div> Signing Android application w own keys.<br />
						<div id="topic">9. Wrap it up : </div> Create real live Android applcation.<br />
						<p style="top: 50px; height: 50px;">
							<a href="./?page_id=5" onclick=""><img src="./CMS_Images/cms-button1.png" /></a>
						</p>
						<div id="image"></div>
						<div id="makeLine_Home_bottom"></div>
						<div style="positon:relative;top: 20px;height: 20px;bottom: 20px;"></div>
						<div style="font-family:Arial;font-size:14px;color:#878787;">NEWS UPDATE</div>
						
					</div>
<?php			} //end if($_GET["cid"] != "")
				//### Head bottom ### ?>


				<?php //twentyeleven_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				
				<div class="content_posts <?php if($_GET["page_id"]==""){ ?>clearfix<?php }?>" >
<?php				if($_GET["cid"]==""){
						
						//start count id
						$_SESSION["post_id"]=1; 
						$post_id = $_SESSION["post_id"];
?>					
						<?php while ( have_posts() ) : the_post(); ?>
						
							<?php if($post_id <= 3){ //show only 3 posts ?>
								
								<?php include("./wp-content/themes/twentyeleven/content_css_include.php"); ?>
			
								<?php get_template_part( 'content', get_post_format() ); ?>
								
								<?php $post_id+=1; ?>
								
							<?php } ?>
			
						<?php endwhile;  ?>
						
<!--					<a href="./?page_id=236" id="home_button_view_all">VIEW ALL &#62;</a> -->
	
						<a href="./?cid=1" id="home_button_view_all">VIEW ALL &#62;</a>
<?php
					}//end if get [cid]
					else {
						
						//start count id
						
						
					//	$_SESSION["post_id"] = (($_GET["cid"] - 1) * 10) + 1;
						$_SESSION["post_id"] = 1;
						$post_id = $_SESSION["post_id"];
						$count = $post_id;
						$totalPosts = 0;
						$start = (($_GET["cid"] - 1) * 10) + 1;
						$end = $_GET["cid"] * 10;
						
						while ( have_posts() ) : the_post();
							
							if($totalPost < 10){
								
								if($count >= $start && $count <= $end){
									include("./wp-content/themes/twentyeleven/content_css_include.php");
									get_template_part( 'content',  get_post_format() );
									$post_id+=1; //this is how many posts in a page
								}
								
								else{
									include("./wp-content/themes/twentyeleven/content_css_include.php");		?><div style="display: none;"><?php
									get_template_part( 'content', get_post_format() );
									// $post_id+=1; //this is how many posts in a page
									?></div><?php
								}
								$count++;
								$totalPosts += 1;
							}
						endwhile;
					?>	<div style="position: relative; top: <?php echo (200*($post_id-1))-20; ?>px; text-align: center; width: 600px; z-index: 2;"> Page 
<?php
							// echo $totalPosts;
							// function ceil() is round up
							// function round() is round up and down
							$totalPosts = ceil($totalPosts / 10);
							// $totalPosts = 100;
							$cidLink = "<a href=\"./?cid=".$_GET["cid"]."\">[".$_GET["cid"]."]</a>";
							function cidLink($value){
								$print = "<a href=\"./?cid=".($_GET["cid"] + $value)."\">".($_GET["cid"] + $value)."</a>";
								return $print;
							}
							
							$cid = $_GET["cid"];
							if($totalPosts==1){
								echo $cidLink;
							}
							
							elseif($totalPosts == 2){
								if($cid==1){
									echo $cidLink." ".cidLink(1);
								}
								else{
									echo cidLink(-1)." {$cidLink}";
								}
							}
							elseif($totalPosts == 3){
								if($cid==1){
									echo $cidLink." 2 3";
								}
								elseif($cid==2){
									echo "1 {$cidLink} 3";
								}
								elseif($cid==3){
									echo "1 2 {$cidLink}";
								}
							}
							elseif($totalPosts < 9){
								for($i=1; $i<=$totalPosts; $i++){
									if($i == $cidLink){
										echo " ".$cidLink." ";
									}
									else{
										echo " ".$i." ";
									}
									
								}
							}
							elseif($totalPosts >= 9){
								if($cid==1){ //[1] 2 mid 4 5
									echo $cidLink." ".($cidLink + 1)." ".($cidLink+2)." ... ".$totalPosts;
								}
								elseif ($cid==2) { // 1 [2] mid 4 5
									echo ($cidLink - 1)." ".$cidLink." ".($cidLink + 1).($cidLink + 2)." ... ".$totalPosts;
								}
								elseif ($cid==3) { // 1 2 mid [4] 5
									echo ($cidLink - 2)." ".($cidLink - 1)." ".$cidLink." ".($cidLink + 1).($cidLink + 2)." ... ".$totalPosts;
								}
								
								elseif ($totalPosts == ($cidLink + 2)){
									echo "1 ... ".($totalPosts - 3)." ".($totalPosts - 2)." ".($totalPosts - 1)." ".$totalPosts;
								}
								elseif ($totalPosts == ($cidLink + 1)){
									echo "1 ... ".($totalPosts - 3)." ".($totalPosts - 2)." ".($totalPosts - 1)." ".$totalPosts;
								}
								elseif ($totalPosts == ($cidLink)){ // 1 2 mid 4 [5]
									echo "1 ... ".($totalPosts - 2)." ".($totalPosts - 1)." ".$totalPosts;
								}
								else{
									echo "1 ... ".($cidLink-2)." ".($cidLink-1)." ".$cidLink." ".($cidLink+1)." ".($cidLink+2)." ... ".$totalPosts;
								}
							}
?>
						</div>
<?php				}
?>
					
				</div>
				
				<?php	//clear session of count id
					$_SESSION["post_id"]="";
				?>
				
				
				
				<?php ?>
				
				<?php //end SESSION post_id ?>

				<?php //twentyeleven_content_nav( 'nav-below' ); ?>

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

			<?php endif; ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
