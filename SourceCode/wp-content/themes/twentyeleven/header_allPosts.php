<body <?php body_class(); ?>>
	<div id="page" class="hfeed" style="height: 2370px;">
		<header id="branding" role="banner">
		<div id="Header_Logo">
		<a href="./?"><img src="./CMS_Images/hyro-logo.jpg" /></a>
		</div>
		<hgroup>
		<?php /* <h1 id="site-title"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></h1> */ ?>
		<div id="site-title"></div>

		<h2 id="site-description">
		<?php /* // bloginfo( 'description' );
			 BASIC ANDROID<br /> APPLICATION DEVELOPMENT
			 */
 ?>
		</h2>
		</hgroup>
		<div id="topRight">
			Call Us Now: <span id="phone">(000) 123-456-789</span>
		</div>

		<?php
		// Check to see if the header image has been removed
		$header_image = get_header_image();
		if ( $header_image ) :
		// Compatibility with versions of WordPress prior to 3.4.
		if ( function_exists( 'get_custom_header' ) ) {
		// We need to figure out what the minimum width should be for our featured image.
		// This result would be the suggested width if the theme were to implement flexible widths.
		$header_image_width = get_theme_support( 'custom-header', 'width' );
		} else {
		$header_image_width = HEADER_IMAGE_WIDTH;
		}
		?>
		<a href="<?php echo esc_url(home_url('/')); ?>">
		<?php
				// The header image
				// Check if this is a post or page, if it has a thumbnail, and if it's a big one
				if ( is_singular() && has_post_thumbnail( $post->ID ) &&
						( /* $src, $width, $height */ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array( $header_image_width, $header_image_width ) ) ) &&
						$image[1] >= $header_image_width ) :
					// Houston, we have a new header image!
					echo get_the_post_thumbnail( $post->ID, 'post-thumbnail' );
				else :
					// Compatibility with versions of WordPress prior to 3.4.
					if ( function_exists( 'get_custom_header' ) ) {
						$header_image_width  = get_custom_header()->width;
						$header_image_height = get_custom_header()->height;
					} else {
						$header_image_width  = HEADER_IMAGE_WIDTH;
						$header_image_height = HEADER_IMAGE_HEIGHT;
					}
					?>
				<img src="<?php header_image(); ?>" width="<?php echo $header_image_width; ?>" height="<?php echo $header_image_height; ?>" alt="" />
			<?php endif; // end check for featured image or standard header ?>
		</a>
		<?php endif; // end check for removed header image ?>

		<?php
			// Has the text been hidden?
			if ( 'blank' == get_header_textcolor() ) :
		?>
			<div class="only-search<?php if ( $header_image ) : ?> with-image<?php endif; ?>">
			<?php get_search_form(); ?>
			</div>
		<?php
		else :
		?>
			<?php get_search_form(); ?>
		<?php endif; ?>

		<nav id="access" role="navigation">
			<hr class="topMenuLine" />
			<h3 class="assistive-text"><?php _e('Main menu', 'twentyeleven'); ?></h3>
			<?php /* Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
			<div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e('Skip to primary content', 'twentyeleven'); ?>"><?php _e('Skip to primary content', 'twentyeleven'); ?></a></div>
			<div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e('Skip to secondary content', 'twentyeleven'); ?>"><?php _e('Skip to secondary content', 'twentyeleven'); ?></a></div>
			<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
			<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
		</nav><!-- #access -->
		
		<?php //add by Arming Huang ?>
</header><!-- #branding --><div style="font-size: 1px;">&nbsp;</div>
	
	<?php //################### start Slider ################## ?>
<?php
	if($_GET["cid"] == "" ){
?>
		<div id="slideshow-23-4ffd39713989a" class="wk-slideshow wk-slideshow-default" data-widgetkit="slideshow" data-options="{&quot;style&quot;:&quot;default&quot;,&quot;autoplay&quot;:1,&quot;interval&quot;:5000,&quot;width&quot;:1000,&quot;height&quot;:320,&quot;duration&quot;:500,&quot;index&quot;:0,&quot;order&quot;:&quot;default&quot;,&quot;navigation&quot;:1,&quot;buttons&quot;:1,&quot;slices&quot;:20,&quot;animated&quot;:&quot;randomSimple&quot;,&quot;caption_animation_duration&quot;:500}" style="visibility: <?php
		if ($_GET['page_id'] == 5 || $_GET["page_id"] == 11 || $_GET["page_id"] == 236 || ($_GET["submit"] == "Search" && $_GET["s"] != "")) { echo 'hidden; ';
		}
		//this is a child webs, that do not need to appear
		//the sliders widget
		else { echo 'visible; ';
		}
			?>position: absolute; width: 1000px; <?php

			if ($_GET['page_id'] == 5 || $_GET["page_id"] == 11 || $_GET["page_id"] == 236 || ($_GET["submit"] == "Search" && $_GET["s"] != "")) { echo 'display: none; ';
			}
			//this is a child webs, that do not need to appear
			//the sliders widget
			?> ">
			<div>
				<Br/>
				<ul class="slides" style="position: absolute; overflow: hidden; height: 320px; width: 100%; ">
		
											<li style="top: 0px; left: 0px; position: absolute; width: 1000px; height: 320px; display: block; z-index: 2; opacity: 1; ">
						<article class="wk-content clearfix"><a href="./?page_id=5"><img src="http://nikoms-ubuntu:83/wordpress9/wp-content/uploads/2012/07/Feature-1.2.jpg" alt="" title="Feature-1.2" width="1000" height="320" class="alignnone size-full wp-image-31"></a>
		<p>&nbsp;</p></article>
					</li>
														<li style="top: 0px; left: 0px; position: absolute; width: 1000px; height: 320px; display: none; z-index: 1; opacity: 1; ">
						<article class="wk-content clearfix"><a href="./?page_id=5"><img src="http://nikoms-ubuntu:83/wordpress9/wp-content/uploads/2012/07/Feature-12.png" data-src="http://nikoms-ubuntu:83/wordpress9/wp-content/uploads/2012/07/Feature-12.png" class="wp-image-22"></a></article>
					</li>
										</ul>
				<div class="next"></div><div class="prev"></div>		<div class="caption" style="display: block; ">Basic Android Application Development</div><ul class="captions" style="display: none; "><li>Basic Android Application Development</li><li></li></ul>
			</div>
			<ul class="nav">
				<li class="active"><span></span></li>
				<li class=""><span></span></li>
			</ul>
		</div>
	<?php } //end if($_GET["cid"] == "" ) ?> 

	<?php //################### End Slider #################### ?>
	
<?php
	if($_GET["page_id"] == 5 || $_GET["page_id"]==11 || $_GET["page_id"]==236 || ($_GET["submit"]=="Search" && $_GET["s"]!="") || $_GET["cid"] != "" ){ ?>
		<div id="Header_Caption1_child">
<?php
}
else{
		?>
		<div id="Header_Caption1">
	<?php } ?>
			<div id="text">
				Quality &#38; Usable <span style="color: #000">Android Training</span>. Feel free to browser through all the pages<br/>and see what's capable to do for You. <span style="color: #000">Enjoy!</span>
			</div>
		</div>
<?php
		if($_GET["page_id"] == 5 || $_GET["page_id"]==11 || $_GET["page_id"]==236 || ($_GET["submit"]=="Search" && $_GET["s"]!="") || $_GET["cid"] != ""){
?>
		<div id="Header_Caption2_child">
		<?php
		}
		else{
		?>
		<div id="Header_Caption2">
		<?php
		}
		?>
		<div id="block1">
		<img src="./CMS_Images/ico-robot.png" />
		<div id="text1">REAL USE ANDROID APP</div>
		Lorem ipsum dolor sit amet, Be consecteture wit adipiscing elit. Verstibulum vitae erost nequred. Duis sit amet justo.quam. Cras
		</div>
		<div id="block2">
		<img src="./CMS_Images/ico-star.png" />
		<div id="text2">COURSE GURANTEE</div>
		Lorem ipsum dolor sit amet, Be consecteture wit adipiscing elit. Verstibulum vitae erost nequred. Duis sit amet justo.quam. Cras
		</div>
		<div id="block3">
		<img src="./CMS_Images/ico-money.png" />
		<div id="text3">RESONABLE PRICE</div>
		Lorem ipsum dolor sit amet, Be consecteture wit adipiscing elit. Verstibulum vitae erost nequred. Duis sit amet justo.quam. Cras
		</div>
		<div id="block4">
		<img src="./CMS_Images/ico-notebook.png" />
		<div id="text4">PREPARED NOTEBOOK</div>
		Lorem ipsum dolor sit amet, Be consecteture wit adipiscing elit. Verstibulum vitae erost nequred. Duis sit amet justo.quam. Cras
		</div>
		</div>

		<?php	/*
	 if($_GET["page_id"] =! 5){
	 ?>
	 <div id="makeLine_Home"></div>
	 <?php
	 }

	 if($_GET["page_id"] != 5){
	 ?>
	 <div id="main">
	 <?php
	 }
	 else{
	 ?>
	 <div id="main_child">
	 <?php
	 }*/
		?>
		<div id="main" style ="<?php
		if ($_GET["page_id"] == 5 || $_GET["page_id"] == 11 || $_GET["page_id"] == 236 || $_GET["submit"] == "Search" /* || $_GET["cid"] != ""*/)
			echo "top: 130px; ";
		if ($_GET["submit"] == "Search")
			echo "height: auto;";
		?>">
