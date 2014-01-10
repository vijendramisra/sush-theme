<?php
/*
Template Name: Blog Single Template
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

	<div class="blog_single_buffer"></div>	

	<div class="blog_single_bg">

		<div class="container">
			<div class="row">
				<div class="col-sm-9">
				
				<div class="blog_single_wrap">
					<div class="row">
						<a class="col-sm-10 col-xs-12" href="blog_single.php"><h2>Lorem Lorem ipsum dolor sit amet. ipsum dolor sit amet, consectetur adipisicing elit. Nulla, dolores.</h2></a>	
						<div class="col-sm-2 date_blog"><h2>03 DEC 2013</h2></div>
					</div>
					
					<div class="thickline"></div>
					<img class="img-responsive" src="http://placehold.it/350x225" alt="">
					<h5 class="blog_author">By Derrick Lorem</h5>
				
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, voluptate, tempore molestiae veniam deleniti voluptatem ducimus est reiciendis ad sed iusto aliquam! Minima, aliquid doloribus nulla dolore modi nobis omnis! 
					<br><br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, commodi, animi, accusantium ad reprehenderit quia nam ipsam id accusamus magnam pariatur aliquam unde cumque omnis ipsa! Aliquam voluptate explicabo quia. 
					<br><br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, commodi, id possimus provident optio aspernatur corrupti animi accusamus quo quibusdam dolorum labore deleniti quasi repellat sit omnis vero illo tenetur nisi quos laboriosam voluptatibus fugit facilis hic similique! Asperiores, facere deserunt non quos esse expedita facilis autem accusantium reprehenderit eveniet dignissimos rem incidunt itaque blanditiis culpa consequuntur animi! Nostrum, accusamus fugiat recusandae distinctio nisi laboriosam quos dolores iste rerum aliquam. Odio, voluptatem, nemo eaque molestias excepturi sit iste accusantium magni repudiandae ea enim repellendus corporis aut. Aliquid voluptatum ipsa debitis repellat! Ipsum, alias eius nulla et ipsam perspiciatis debitis inventore laboriosam molestiae est ipsa eveniet pariatur cum obcaecati natus distinctio blanditiis! Reprehenderit, quasi, aliquam, architecto deserunt minus impedit aperiam illum quae iure placeat aut quaerat porro obcaecati iusto nam dolore tenetur maiores harum consequuntur eveniet iste vel qui quam quos.
					<br><br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, omnis, exercitationem, consequuntur harum esse molestiae cumque quo pariatur debitis ut similique aspernatur minus dolor quos ipsum doloremque dicta odio autem. Beatae, qui, labore ad fugiat iure in rem maiores ut obcaecati est! Possimus, labore, ad, fugit, repudiandae aspernatur sequi perferendis saepe illo sint ab nulla neque ipsa voluptatibus consequuntur quis fugiat est sed. At, repudiandae, ullam blanditiis suscipit pariatur sint corporis voluptas doloribus voluptatem quidem soluta dolores ipsum tenetur quas explicabo quisquam quam quis autem illo illum quod reprehenderit beatae fugit aliquid neque quia doloremque facere commodi repellat ut saepe inventore atque voluptates eos quae iste accusantium! Nobis, sit exercitationem repudiandae maiores deleniti corporis consectetur magni eveniet quas labore minima fugit ullam rem quos voluptates. Commodi perferendis dolore assumenda corporis.
					 </p>					
				</div>	

				</div>

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