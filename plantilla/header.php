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
			

 				<a class="navbar-brand" href="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive" alt=""/></a>

				<a class="navbar-brand" href="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive" alt=""/></a>

			
			</div>
			<ul class="shopping_grid ">
			      <!--<a href="#"><li>Join</li></a>
			      <a href="login.html"><li>Sign In</li></a>
			      <a href="#"><li><span class="m_1">Shopping Bag</span>&nbsp;&nbsp;(0) &nbsp;<img src="images/bag.png" alt=""/></li></a>-->
			      <div class="clearfix"> </div>
			</ul>
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
</div>

<div class="slider">
	  <div class="callbacks_container">
	      <ul class="rslides" id="slider">
	        <li> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner1.jpg" class="img-responsive" alt=""/> 
	        <div class="banner_desc">
				<h1>We Provide Worlds top fashion for less fashionpress.</h1>
				<h2>FashionPress the name of the of hi class fashion Web FreePsd.</h2>
			</div>
	        </li>
	        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner2.jpg" class="img-responsive" alt=""/> 
	         <div class="banner_desc">
				<h1>Duis autem vel eum iriure dolor in hendrerit.</h1>
				<h2>Claritas est etiam processus dynamicus, qui sequitur .</h2>
			 </div>
	        </li>
	        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner3.jpg" class="img-responsive" alt=""/> 
	          <div class="banner_desc">
				<h1>Ut wisi enim ad minim veniam, quis nostrud.</h1>
				<h2>Mirum est notare quam littera gothica, quam nunc putamus.</h2>
			  </div>
	        </li>
	      </ul>
	  </div>
</div>
<div class="column_center">
  <div class="container">
	<div class="search">
	 
	  <div class="stay_right">
		  <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
		  <input type="submit" value="">
	  </div>
	  <div class="clearfix"> </div>
	</div>
    <div class="clearfix"> </div>
  </div>
</div>
<div class="main">
  <div class="content_top">
  	<div class="container">
	   <div class="col-md-3 sidebar_box">
	   	 <div class="sidebar">
			<div class="menu_box">
		    <h3 class="menu_head">Products Menu</h3>
			  <ul class="menu">
				<li class="item1"><a href="#"><img class="arrow-img" src="images/f_menu.png" alt=""/> Man</a>
					<ul class="cute">
						<li class="subitem1"><a href="#">Cute Kittens </a></li>
						<li class="subitem2"><a href="#">Strange Stuff </a></li>
						<li class="subitem3"><a href="#">Automatic Fails </a></li>
					</ul>
				</li>
				<li class="item2"><a href="#">
                    
                         <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/f_menu.png" class="arrow-img" alt=""/>   Women</a>           
					<ul class="cute">
						<li class="subitem1"><a href="#">Cute Kittens </a></li>
						<li class="subitem2"><a href="#">Strange Stuff </a></li>
						<li class="subitem3"><a href="#">Automatic Fails </a></li>
					</ul>
				</li>
				<li class="item3"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/f_menu.png" class="arrow-img" alt=""/>Fashion 2015</a>
					<ul class="cute">
						<li class="subitem1"><a href="#">Cute Kittens </a></li>
						<li class="subitem2"><a href="#">Strange Stuff </a></li>
						<li class="subitem3"><a href="#">Automatic Fails</a></li>
					</ul>
				</li>
				<li class="item4"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/f_menu.png" class="arrow-img" alt=""/>Kids</a>
					<ul class="cute">
						<li class="subitem1"><a href="#">Cute Kittens </a></li>
						<li class="subitem2"><a href="#">Strange Stuff </a></li>
						<li class="subitem3"><a href="#">Automatic Fails </a></li>
					</ul>
				</li>
				<li class="item5"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/f_menu.png" class="arrow-img" alt=""/>Jeans</a>
					<ul class="cute">
						<li class="subitem1"><a href="#">Cute Kittens </a></li>
						<li class="subitem2"><a href="#">Strange Stuff </a></li>
						<li class="subitem3"><a href="#">Automatic Fails </a></li>
					</ul>
				</li>
				<li class="item6"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/f_menu.png" class="arrow-img" alt=""/>Tshirt</a>
					<ul class="cute">
						<li class="subitem1"><a href="#">Cute Kittens </a></li>
						<li class="subitem2"><a href="#">Strange Stuff </a></li>
						<li class="subitem3"><a href="#">Automatic Fails </a></li>
					</ul>
				</li>
				<li class="item7"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/f_menu.png" class="arrow-img" alt=""/>Top Fashion</a>
					<ul class="cute">
						<li class="subitem1"><a href="#">Cute Kittens </a></li>
						<li class="subitem2"><a href="#">Strange Stuff </a></li>
						<li class="subitem3"><a href="#">Automatic Fails </a></li>
					</ul>
				</li>
				<li class="item8"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/f_menu.png" class="arrow-img" alt=""/>Summer Collection</a>
					<ul class="cute">
						<li class="subitem1"><a href="#">Cute Kittens </a></li>
						<li class="subitem2"><a href="#">Strange Stuff </a></li>
						<li class="subitem3"><a href="#">Automatic Fails </a></li>
					</ul>
				</li>
				<li class="item9"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/f_menu.png" class="arrow-img" alt=""/>Special Offer</a>
					<ul class="cute">
						<li class="subitem1"><a href="#">Cute Kittens </a></li>
						<li class="subitem2"><a href="#">Strange Stuff </a></li>
						<li class="subitem3"><a href="#">Automatic Fails </a></li>
					</ul>
				</li>
			</ul>
		</div>
			
	
       </div>
		    <div class="delivery">
                <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/delivery.jpg" class="img-responsive" alt=""/> 
                                
				<h3>Delivering</h3>
				<h4>World Wide</h4>
			</div>
			<div class="twitter">
			   <h3>Latest From Twitter</h3>
			   <ul class="twt1">
			   	  <i class="twt"> </i>
			   	  <li class="twt1_desc"><span class="m_1">@Contrary</span> to popular belief, Lorem Ipsum is<span class="m_1"> not simply</span></li>
			   	  <div class="clearfix"> </div>
			   </ul>
			   <ul class="twt1">
			   	  <i class="twt"> </i>
			   	  <li class="twt1_desc"><span class="m_1">There are many</span> variations of passages of Lorem Ipsum available, but the majority <span class="m_1">have suffered</span></li>
			   	  <div class="clearfix"> </div>
			   </ul>
			   <ul class="twt1">
			   	  <i class="twt"> </i>
			   	  <li class="twt1_desc"><span class="m_1">Lorem Ipsum</span> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has <span class="m_1">been the industry's standard dummy text ever</span></li>
			   	  <div class="clearfix"> </div>
			   </ul>
			</div>
			<div class="clients">
				<h3>Our Happy Clients</h3>
				<h4>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</h4>
			   <ul class="user">
			   	<i class="user_icon"></i>
			   	<li class="user_desc"><a href="#"><p>John Doe, Company Info</p></a></li>
			   	<div class="clearfix"> </div>
			   </ul>
			</div>
	   </div> 
	   <div class="col-md-9 content_right">
	   	<div class="top_grid1">
	     <div class="col-md-4 box_2">
	     	<div class="grid_1"><a href="single.html">
	     		<div class="b-link-stroke b-animate-go  thickbox">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/p1.jpg" class="img-responsive" alt=""/> 
                                 
  		        </div>
	     	   <div class="grid_2">
	     	  	<p>There are many variations of passages</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>$99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Get It</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	   </div>
	     	</div>
	     </a></div>
	     <div class="col-md-8 box_1"><a href="single.html">
	       <div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		         <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/p2.jpg" class="img-responsive" alt=""/>  </div>
	     	  <div class="grid_2">
	     	  	<p>There are many variations of passages</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>$99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Get It</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
	     <div class="clearfix"> </div>
	    </div> 
	    <div class="top_grid2">
	      <div class="col-md-4 top_grid1-box1"><a href="single.html">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
                  
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/p3.jpg" class="img-responsive" alt=""/> 
                                 
                  
		       </div>
	     	  <div class="grid_2">
	     	  	<p>There are many variations of passages</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>$99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Get It</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
	     <div class="col-md-4 top_grid1-box1"><a href="single.html">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/p4.jpg" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>There are many variations of passages</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>$99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Get It</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
	     <div class="col-md-4 top_grid1-box1"><a href="single.html">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/p5.jpg" class="img-responsive" alt=""/>  </div>
	     	  <div class="grid_2">
	     	  	<p>There are many variations of passages</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>$99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Get It</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	    </a> </div>
	     <div class="clearfix"> </div>
	    </div> 
	    <div class="top_grid2">
	     <div class="col-md-4 top_grid1-box1"><a href="single.html">
	     	<div class="grid_1">
	     	 <div class="b-link-stroke b-animate-go  thickbox">
		       <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/p6.jpg" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>There are many variations of passages</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>$99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Get It</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
	    <div class="col-md-4 top_grid1-box1"><a href="single.html">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/p7.jpg" class="img-responsive" alt=""/>  </div>
	     	  <div class="grid_2">
	     	  	<p>There are many variations of passages</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>$99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Get It</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
	     <div class="col-md-4 top_grid1-box1"><a href="single.html">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/p8.jpg" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>There are many variations of passages</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>$99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Get It</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
	     <div class="clearfix"> </div>
	    </div> 
	    <h4 class="head"><span class="m_2">Popular</span> Products Now</h4>
	    <div class="top_grid2">
	     <div class="col-md-4 top_grid1-box1"><a href="single.html">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		       <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/p9.jpg" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>There are many variations of passages</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>$99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Get It</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	    </a> </div>
	    <div class="col-md-4 top_grid1-box1"><a href="single.html">
	     	<div class="grid_1">
	     	 <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/p10.jpg" class="img-responsive" alt=""/>  </div>
	     	  <div class="grid_2">
	     	  	<p>There are many variations of passages</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>$99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Get It</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
	     <div class="col-md-4 top_grid1-box1"><a href="single.html">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/p11.jpg" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>There are many variations of passages</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>$99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Get It</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
	     <div class="clearfix"> </div>
	    </div> 
	    <div class="top_grid2">
	     <div class="col-md-4 top_grid1-box1"><a href="single.html">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/p12.jpg" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>There are many variations of passages</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>$99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Get It</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
	    <div class="col-md-4 top_grid1-box1"><a href="single.html">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		         <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/p13.jpg" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>There are many variations of passages</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>$99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Get It</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
	     <div class="col-md-4 top_grid1-box1"><a href="single.html">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/p14.jpg" class="img-responsive" alt=""/>  </div>
	     	  <div class="grid_2">
	     	  	<p>There are many variations of passages</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>$99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Get It</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
	     <div class="clearfix"> </div>
	    </div> 
       </div>
	  </div>  	    
	</div>
</div>