<?php
/*
Template Name: Apps Single Template
*/
?>
<html>
<head>
	<title><?php wp_title(''); ?></title>
	<!-- HEADER -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.css" rel="stylesheet">

	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/font-awesome.css">

	<!-- Custom CSS -->
	
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
	<!-- <link rel="stylesheet" href="css/animate.css">	 -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">	
	<!-- <link rel="stylesheet" href="css/global.css">	 -->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet" href="css/blueimp-gallery.css">
	<?php wp_head(); ?>
</head>

<body>
	<!-- NAVIGATION HEADER -->
		<!-- NAV MENU -->
	<!-- ####################### -->	

	<nav class="navbar navbar-inverse navbar-fixed-top custom_nav" role="navigation">
		<div class="container">			
	  <!-- Brand and toggle get grouped for better mobile display -->
	  <div class="navbar-header">
	    <button type="button" class="navbar-toggle custom_toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	      <span class="sr-only">Toggle navigation</span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </button>
	    <a class="navbar-brand brand_logo" href="index.php">SUSHMOBILE</a>
	  </div>

	  <!-- Collect the nav links, forms, and other content for toggling -->
	  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	    	    
	    <ul class="nav navbar-nav navbar-right">
	    	<li><a class="nav_text" href="apps.php">OUR APPS</a></li>
	    	<li><a class="nav_text" href="solutions.php">HOW WE WORK</a></li>			
	    	<li><a class="nav_text" href="clients.php">CLIENTS</a></li>
	      	<li><a class="nav_text" href="blog.php">BLOG</a></li>
	      	<li><a class="nav_text" href="about_us.php">ABOUT US</a></li>
	      	<li class="btn-send hidden-xs">
	      		<a class="nav_text" href="#footer">
	      			<span class="icon_send glyphicon glyphicon-send"></span>
	      		</a>
	      	</li>
	    </ul>
	  </div><!-- /.navbar-collapse -->

	  </div>
	</nav>

	

	<!-- SINGLE BANNER -->
	<!-- <div class="nav_buffer"></div>	 -->
	<div class="single_banner_bg">
		<img class="hidden-xs single_banner img-responsive" src="http://placehold.it/1250x300" alt="single banner">		
	</div>		

	<!-- APPS_DETAILS UNIT -->
		<!-- APPS SINGLE DETAIL UNIT-->
	<!-- ####################### -->	

	<div class="apps_detail_bg">		
		<div class="container">
			<div class="row">
				<div class="col-sm-8 apps_title_wrapper">
					<img class="apps_detail_icon img-thumbnail img-rounded" src="http://placehold.it/120x120" alt="logo">
					<h1>HOME HUNTER</h1>				
					<h2>KIWIBANK</h2>				
				
					<div class="apps_description">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, unde, quisquam, doloremque, consectetur neque corporis temporibus dolor cum a doloribus cupiditate quibusdam molestias obcaecati totam optio eligendi explicabo autem. Aliquid.</p>
					</div>
				</div>
				<div class="col-sm-4 col-xs-12">
					<div class="app_detail_specs">
						<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, unde</h4>
						<h3>Lorem ipsum dolor sit amet</h3>
						<a href="#">
							<img class="app_link ios_link" src="http://placehold.it/110x40">
						</a>
						<a href="#">
							<img class="app_link android_link" src="http://placehold.it/110x40">
						</a>						
					</div>
				</div>
			</div>
		</div>
	</div>
		
	
	<!-- APPS_GALLERY UNIT -->
	<div class="app_gallery_bg">	
	<div class="container">	
		<!-- <div id="links"> -->
		<div class="gallery_box">
		    <a class="app_screenshots img-responsive" href="http://placehold.it/320x480" data-gallery>
		        <img src="http://placehold.it/160x240">
		    </a>
		    <a class="app_screenshots img-responsive" href="http://placehold.it/320x480" data-gallery>
		        <img src="http://placehold.it/240x320">
		    </a>
		    <a class="app_screenshots img-responsive" href="http://placehold.it/320x480" data-gallery>
		        <img src="http://placehold.it/160x240">
		    </a>
		    <a class="app_screenshots img-responsive" href="http://placehold.it/320x480" data-gallery>
		        <img src="http://placehold.it/160x240">
		    </a>
		    <a class="app_screenshots img-responsive" href="http://placehold.it/320x480" data-gallery>
		        <img src="http://placehold.it/160x240">
		    </a>
		    <a class="app_screenshots img-responsive" href="http://placehold.it/320x480" data-gallery>
		        <img src="http://placehold.it/160x240">
		    </a>
		    <a class="app_screenshots img-responsive" href="http://placehold.it/320x480" data-gallery>
		        <img src="http://placehold.it/160x240">
		    </a>
		    <a class="app_screenshots img-responsive" href="http://placehold.it/320x480" data-gallery>
		        <img src="http://placehold.it/160x240">
		    </a>		    		    		    		    		    
		</div>	
	</div>	
</div>

	<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
	<div id="blueimp-gallery" class="blueimp-gallery apps_screen_wrapper">
	    <!-- The container for the modal slides -->
	    <div class="slides"></div>
	    <!-- Controls for the borderless lightbox -->
	    <h3 class="title"></h3>
	    <a class="prev">‹</a>
	    <a class="next">›</a>
	    <a class="close">×</a>
	    <a class="play-pause"></a>
	    <ol class="indicator"></ol>
	    <!-- The modal dialog, which will be used to wrap the lightbox content -->
	    <div class="modal fade apps_screen_item">
	        <div class="modal-dialog">
	            <div class="modal-content">
	                <!-- <div class="modal-header"> -->
	                    <!-- <button type="button" class="close" aria-hidden="true">&times;</button> -->
	                    <!-- <h4 class="modal-title"></h4> -->
	                <!-- </div> -->
	                <div class="modal-body ">
<!-- 	                    <button type="button" class="btn btn-default pull-left prev">
	                        <i class="glyphicon glyphicon-chevron-left"></i>
	                        Previous
	                    </button>
	                    <button type="button" class="btn btn-primary next">
	                        Next
	                        <i class="glyphicon glyphicon-chevron-right"></i>
	                    </button> -->
	                	
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>
</div>


		

	<!-- APPS_FEATURED LIST UNIT -->
		<!-- APPS_FEATURED LIST UNIT -->
	
	<div class="apps_featuredlist_bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>APP FEATURES</h2>		
					<ul>
						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, placeat!</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
						<li>ipsum dolor sit amet, consectetur adipisicing elit.</li>
						<li>psum dolor sit amet, consectetur adipisicing</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste non dolorum facere!</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, placeat!</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
						<li>ipsum dolor sit amet, consectetur adipisicing elit.</li>
						<li>psum dolor sit amet, consectetur adipisicing</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste non dolorum facere!</li>
					</ul>
				</div>
			</div>			
		</div>		
	</div> 			

	<!-- LEFT MODULE UNIT -->
		<!-- LEFT MODULE UNIT -->

	<div class="apps_left_bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<img src="http://placehold.it/550x300" class="img-responsive" alt="Responsive image">
				</div>				
				<div class="col-sm-6">
					<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, blanditiis.</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, atque, eveniet, quasi cupiditate provident illum nam blanditiis sit dolor fuga repellat dolorem quaerat beatae vero aut recusandae porro reprehenderit excepturi maiores optio hic quas veniam architecto laudantium labore laborum dolores.<br><br>
					quaerat beatae vero aut recusandae porro reprehenderit excepturi maiores optio hic quas veniam architecto laudantium labore laborum dolores.<br>
					</p>
				</div>
			</div>
		</div>		
	</div>				

	<!-- RIGHT MODULE UNIT -->
		<!-- RIGHT MODULE UNIT -->

	<div class="apps_right_bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, blanditiis.</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, atque, eveniet, quasi cupiditate provident illum nam blanditiis sit dolor fuga repellat dolorem quaerat beatae vero aut recusandae porro reprehenderit excepturi maiores optio hic quas veniam architecto laudantium labore laborum dolores.<br><br>
					quaerat beatae vero aut recusandae porro reprehenderit excepturi maiores optio hic quas veniam architecto laudantium labore laborum dolores.<br>
					</p>
				</div>
				<div class="col-sm-6 col-xs-12">
					<img src="http://placehold.it/550x300" class="img-responsive" alt="Responsive image">
				</div>								
			</div>
		</div>		
	</div>				

	<!-- FOOTER UNIT -->
	<!-- ####################### -->
			
		<!-- CONTACT UNIT -->
	<!-- ####################### -->		

	<a name="footer"></a>

	<div class="contact_bg"> 
		<div class="container">
			<div class="row">
				<div class="col-sm-6 address_wrapper">
					
					<h3><span class="icon_send glyphicon glyphicon-earphone"></span> &nbsp 0800-123-APPS</h3>
					



					<div class="location_box">
						<address class="location_text col-md-6">
						  <strong>AUCKLAND OFFICE</strong><br>
						  3A 47 High Street<br>
						  Auckland<br>
						  New Zealand<br>
						  <abbr title="Phone">Phone:</abbr> 09 281 5603
						</address>									
						<div class="map_box col-md-6 ">
							<iframe width="280" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=sushmobile&amp;aq=&amp;sll=-36.848125,174.766276&amp;sspn=0.013788,0.027874&amp;ie=UTF8&amp;hq=sushmobile&amp;hnear=&amp;t=m&amp;ll=-36.848125,174.766276&amp;spn=0.013788,0.027874&amp;output=embed"></iframe>
						</div>
					</div>	

					<div class="location_box">
						<address class="location_text col-md-6">
						  <strong>WELLINGTON OFFICE</strong><br>
						  Lv 16, 157 Lambton Quay<br>
						  Wellington<br>
						  New Zealand<br>					  
						  <abbr title="Phone">Phone:</abbr> 021 321-936
						</address>					
						<div class="map_box col-md-6 ">
							<iframe width="280" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.nz/maps?t=m&amp;q=157+Lambton+Quay,+Wellington&amp;ie=UTF8&amp;hq=&amp;hnear=157+Lambton+Quay,+Wellington,+6011&amp;ll=-41.282386,174.776516&amp;spn=0.01935,0.025749&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>					
						</div>
					</div>	


				</div>
				<div class="col-sm-6 form_wrapper">				
					<form role="form">						
						<h3><span class="icon_send glyphicon glyphicon-send"></span> &nbsp EMAIL US</h3>	
					  <div class="form-group">				  
					    <input type="text" class="form-control custom_input" id="" placeholder="Your Name">
					  </div>
					  <div class="form-group">				  
					    <input type="email" class="form-control custom_input" id="" placeholder="Your Email">
					  </div>				  
					  <div class="form-group">				  
					    <input type="text" class="form-control custom_input" id="" placeholder="Your Subject">
					  </div>
					<textarea class="form-control custom_input" rows="10" placeholder="Your Enquiry"></textarea>
					  <button type="submit" class="btn btn-block btn-primary btn-lg pull-right btn-submit">SUBMIT ENQUIRY</button>
					</form>
					
				</div>
			</div>

			<div class="breakline"></div>		
			<div class="custom_footer">
					<a href="" class="col-sm-3 col-xs-12">
						<span class="social_icon"><i class="fa fa-facebook-square fa-lg"></i> Sush Mobile on Facebook</span>
					</a>
					<a href="" class="col-sm-3 col-xs-12">
						<span class="social_icon"><i class="fa fa-twitter-square fa-lg"></i> Sush Mobile on Twitter</span>		
					</a>
					<a href="" class="col-sm-3 col-xs-12">
						<span class="social_icon"><i class="fa fa-linkedin-square fa-lg"></i> Sush Mobile on Linkedin</span>		
					</a>
					<a href="" class="col-sm-3 col-xs-12">
						<span class="social_icon"><i class="fa fa-youtube fa-lg"></i> Sush Mobile on Youtube</span>		
					</a>
				<div class="footer_text">
					<span>All Rights Reserved - Sush Mobile 2013 </span>
					<!-- <span>Made In New Zealand</span>				 -->
				</div>
				
			</div>		
		</div>

	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	
    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.js"></script>
    
    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.js"></script>	

	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/bookmarkscroll.js"></script>



    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/hammer.min.js"></script>
	
	<!-- Custom Javascript -->

    <script src="<?php bloginfo( 'template_url' ); ?>/js/application.js"></script>
    <!-- JAVASCRIPT REQUIRED FOR LIGHTBOX GALLERY -->
    <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.blueimp-gallery.min.js"></script>	
	<script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap-image-gallery.min.js"></script>
	 <?php wp_footer(); ?>
</body>
</html>