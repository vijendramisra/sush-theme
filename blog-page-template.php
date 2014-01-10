<?php
/*
Template Name: Blog Template
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

	<div class="nav_buffer"></div>	

	<div class="blog_list_bg">

		<div class="container">
			<div class="row">
				<div class="col-sm-9">
				
					<!-- BLOG SINGLE ITEM -->
					<div class="blog_list_item">
	<div class="row">
		<a class="col-sm-10" href="blog_single.php"><h2>Lorem Lorem ipsum dolor sit amet. ipsum dolor sit amet, consectetur adipisicing elit. Nulla, dolores.</h2></a>	
		<div class="col-sm-2 date_blog"><h2>03 DEC 2013</h2></div>
	</div>
	
	<div class="thickline"></div>
	<div class="row">
		<div class="col-sm-12 col-md-6 blog-img-wrapper">
			<img src="http://placehold.it/350x225" alt="">	
		</div>		
		
		<div class="col-sm-12 col-md-6">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, voluptate, tempore molestiae veniam deleniti voluptatem ducimus est reiciendis ad sed iusto aliquam! Minima, aliquid doloribus nulla dolore modi nobis omnis! <br><br>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, commodi, animi, accusantium ad reprehenderit quia nam ipsam id accusamus magnam pariatur aliquam unde cumque omnis ipsa! Aliquam voluptate explicabo quia. 
			</p>						
			<a href="#">Read More</a>		
		</div>
	</div>	
	<div class="thickline"></div>
	<!-- <div class="breakline"></div> -->
</div>		

					<!-- BLOG SINGLE ITEM -->
					<div class="blog_list_item">
	<div class="row">
		<a class="col-sm-10" href="blog_single.php"><h2>Lorem Lorem ipsum dolor sit amet. ipsum dolor sit amet, consectetur adipisicing elit. Nulla, dolores.</h2></a>	
		<div class="col-sm-2 date_blog"><h2>03 DEC 2013</h2></div>
	</div>
	
	<div class="thickline"></div>
	<div class="row">
		<div class="col-sm-12 col-md-6 blog-img-wrapper">
			<img src="http://placehold.it/350x225" alt="">	
		</div>		
		
		<div class="col-sm-12 col-md-6">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, voluptate, tempore molestiae veniam deleniti voluptatem ducimus est reiciendis ad sed iusto aliquam! Minima, aliquid doloribus nulla dolore modi nobis omnis! <br><br>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, commodi, animi, accusantium ad reprehenderit quia nam ipsam id accusamus magnam pariatur aliquam unde cumque omnis ipsa! Aliquam voluptate explicabo quia. 
			</p>						
			<a href="#">Read More</a>		
		</div>
	</div>	
	<div class="thickline"></div>
	<!-- <div class="breakline"></div> -->
</div>		

					<!-- BLOG SINGLE ITEM -->
					<div class="blog_list_item">
	<div class="row">
		<a class="col-sm-10" href="blog_single.php"><h2>Lorem Lorem ipsum dolor sit amet. ipsum dolor sit amet, consectetur adipisicing elit. Nulla, dolores.</h2></a>	
		<div class="col-sm-2 date_blog"><h2>03 DEC 2013</h2></div>
	</div>
	
	<div class="thickline"></div>
	<div class="row">
		<div class="col-sm-12 col-md-6 blog-img-wrapper">
			<img src="http://placehold.it/350x225" alt="">	
		</div>		
		
		<div class="col-sm-12 col-md-6">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, voluptate, tempore molestiae veniam deleniti voluptatem ducimus est reiciendis ad sed iusto aliquam! Minima, aliquid doloribus nulla dolore modi nobis omnis! <br><br>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, commodi, animi, accusantium ad reprehenderit quia nam ipsam id accusamus magnam pariatur aliquam unde cumque omnis ipsa! Aliquam voluptate explicabo quia. 
			</p>						
			<a href="#">Read More</a>		
		</div>
	</div>	
	<div class="thickline"></div>
	<!-- <div class="breakline"></div> -->
</div>		

					<div class="pagination_wrapper">
						<ul class="pagination">
						  <li class="disabled"><a href="#">&laquo;</a></li>
						  <li class="active"><a href="#">1</a></li>
						  <li><a href="#">2</a></li>
						  <li><a href="#">3</a></li>
						  <li><a href="#">4</a></li>
						  <li><a href="#">5</a></li>
						  <li><a href="#">6</a></li>
						  <li><a href="#">7</a></li>					  
						  <li><a href="#">&raquo;</a></li>
						</ul>					
					</div>
					
				</div>

				<!-- Fixed Side Nav for Blog Links -->
				<!-- ######################################################## -->

				<!-- BLOG SIDE NAV -->				
					<div class="side_blog_list hidden-xs col-sm-3">
		<h2>PAST POSTING</h2>
		<div class="thickline"></div>
		<a href="">Lorem rLorem ipsum dolor sit amet. ipsum dolor sit amet, consectetur adipisicing elit. Nulla, dolores.</a>
		<p>- 03 DEC 2013</p>

		<div class="thickline"></div>
		<a href="">Lorem rLorem ipsum dolor sit amet. ipsum dolor sit amet, consectetur adipisicing elit. Nulla, dolores.</a>
		<p>- 03 DEC 2013</p>

		<div class="thickline"></div>
		<a href="">Lorem rLorem ipsum dolor sit amet. ipsum dolor sit amet, consectetur adipisicing elit. Nulla, dolores.</a>
		<p>- 03 DEC 2013</p>
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
	 <?php wp_footer(); ?>
</body>
</html>