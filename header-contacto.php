<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<!DOCTYPE HTML>
<html>
<head>
 <title><?php wp_title('|', true, 'right'); ?><?php echo get_bloginfo('name'); ?></title> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashionpress Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

<!-- Custom Theme files -->
<!--webfont-->

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="header">
	<div class="header_top">
		<div class="container ">
				<div class="logo space">
				<a href="index.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive" alt=""/></a>

			</div>
			
			</div>
		
		    <div class="clearfix"> </div>
		</div>
	</div>
	<div class="h_menu4"><!-- start h_menu4 -->
		<div class="container">
				<a class="toggleMenu" href="#">Menu</a>
				<?php 
					$args = array(
						'menu'        => 'primary-menu',            
						'menu_class'  => 'nav',
						'container'   => false
					);
					wp_nav_menu( $args );
        		?>  
			
			
	      </div><!-- end h_menu4 -->
     </div>


	

	   