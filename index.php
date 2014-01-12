<?php
/**
 * @package WordPress
 * @subpackage Sush Mobile
 */
 get_header();
?>

	
	<!-- HERO UNIT -->
	<!-- HERO BANNER -->
<!-- ####################### -->

	<div id="carousel-example-generic" class="carousel slide home_carousel" data-ride="carousel">
  
  <ol class="carousel-indicators custom_indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
  
  <div class="carousel-inner hero_banner">
  	
    <div class="item active hero_item">      
      <img src="<?php bloginfo( 'template_url' ); ?>/img/banner_350px.jpg" alt="banner_1">      
      <div class="grey_layer"></div>
        <div class="container">
          <a class="col-xs-12 col-sm-8 col-md-8 hero_text" href="#"><h1>HOME HUNTER</h1>
          <h2>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
          </h2>
          </a>
        </div>    
    </div>

  
    <div class="item hero_item">      
      <img src="<?php bloginfo( 'template_url' ); ?>/img/banner_350px.jpg" alt="banner_2">      
      <div class="grey_layer"></div>
        <div class="container">
          <a class="col-xs-12 col-sm-8 col-md-8 hero_text" href="#"><h1>HOME HUNTER 2</h1>
          <h2>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
          </h2>
          </a>
        </div>        
    </div>

    <div class="item hero_item">      
      <img src="<?php bloginfo( 'template_url' ); ?>/img/banner_350px.jpg" alt="banner_2">      
      <div class="grey_layer"></div>
        <div class="container">
          <a class="col-xs-12 col-sm-8 col-md-8 hero_text" href="#"><h1>HOME HUNTER HOME HUNTER 3</h1>
          <h2>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
          </h2>
          </a>
        </div>        
    </div>    

  </div>

  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <!-- <i class="fa fa-arrow-left fa-3x arrow_position"></i> -->
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <!-- <i class="fa fa-arrow-right fa-3x arrow_position"></i> -->
  </a>
</div>	

	<div class="headline_bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<h1>We deliver beautiful mobile and digital experiences that transform the way businesses engage with their customers on mobile, tablet and desktop.</h1>
				</div>
				<!-- <div class="col-sm-2"> -->
					<!-- <button class="col-sm-2 btn btn-lg btn-success">CALL TO ACTION</button> -->
				<!-- </div> -->
			</div>
			
		</div>	
	</div>

	<!-- HOME PLATFORMS UNIT -->
		<!-- PLATFORM UNIT -->
	<!-- ####################### -->

	<div class="platform_bg">
		<div class="container">

			<a href="apps.php"><h3 class="title_text">PLATFORMS WE WORK WITH</h3></a>

			<div class="platform_wrapper row">

				<?php
				
				 query_posts(array('cat' => 16, 'order' => 'ASC') );
					while (have_posts()) : the_post();
				?>
			  <div class="col-xs-6 col-sm-2 platform_unit">
			  	<?php the_post_thumbnail('full', array('class' => 'img-circle img-thumbnail')); ?>
			  	
			  	<h3><?php the_title(); ?></h3>
			  	
			  </div>
			  <?php endwhile; wp_reset_query();?>
			  
			</div>
		</div>
	</div>
		

	<!-- OUR APPS SLIDER UNIT -->
	<!-- ####################### -->	

	<div class="apps_bg">
		<div class="container">
			<a href="apps.php"><h3 class="title_text">OUR APPS</h3></a>
			
				<div class="row apps_wrapper">
					<div class="col-sm-3 col-xs-6 apps_item">
						<div>
							<img class="img-thumbnail" src="http://placehold.it/300x300" alt="">							
						</div>						
						<h3>Unitec Mobile App</h3>
						<h4>UNITEC</h4>
					</div>
					<div class="col-sm-3 col-xs-6 apps_item">
						<div>
							<img class="img-thumbnail" src="http://placehold.it/300x300" alt="">							
						</div>						
						<h3>Unitec Mobile App</h3>
						<h4>UNITEC</h4>
					</div>
					<div class="col-sm-3 col-xs-6 apps_item">
						<div>
							<img class="img-thumbnail" src="http://placehold.it/300x300" alt="">							
						</div>						
						<h3>Unitec Mobile App</h3>
						<h4>UNITEC</h4>
					</div>
					<div class="col-sm-3 col-xs-6 apps_item">
						<div>
							<img class="img-thumbnail" src="http://placehold.it/300x300" alt="">							
						</div>						
						<h3>Unitec Mobile App</h3>
						<h4>UNITEC</h4>
					</div>
				</div>
		</div>
	</div>

	<!-- BLOG UNIT -->
	<!-- ####################### -->	

	<div class="blog_bg">
		<div class="container">
			<a href="index.php?page_id=45">
				<h3 class="title_text">BLOGS</h3>	
			</a>
			
			<div class="row blog_wrapper">

				<?php
				 query_posts(array('cat' => 13, 'tag' => 'Homeblog', 'posts_per_page' => 3) );
					while (have_posts()) : the_post();
				?>

				<div class="col-md-4 col-sm-6 blog_item">									
					<div class="blog_box img-thumbnail">
						<?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image'); endif; ?>	
						<a href="<?php the_permalink() ?>" title="Permanent Link to <?php if ( function_exists('the_title_attribute')) the_title_attribute(); else the_title(); ?>"><h3><?php the_title(); ?></h3></a>
						<?php the_excerpt() ?>				
					</div>	
				</div>

				<?php endwhile; wp_reset_query();?>

			</div>
		</div>
	</div>

	<!-- CLIENT UNIT -->
	<!-- ####################### -->	

<div class="client_bg"> 
	<div class="container">
		<a href="index.php?page_id=30">
			<h3 class="title_text">WHO WE WORK WITH</h3>	
		</a>		
		<div id="carousel-client" class="carousel slide" data-ride="carousel">

		  <!-- Wrapper for slides -->

		  <div class="carousel-inner">
		        
			<div class="item active">
				<?php
					query_posts(array('cat' => 12, 'tag' => 'Homeclient') );
					while (have_posts()) : the_post();
				?>
		    	<div class="col-xs-6 col-sm-4 col-md-2 client_box">
		    		<?php the_post_thumbnail('full', array('class' => 'img-thumbnail')); ?>	
		    	</div>
		    	   <?php endwhile; wp_reset_query();?>   
		    </div>


		  </div>

	  <!-- Controls -->

		  <a class="left carousel-control no_shade" href="#carousel-client" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		  </a>
		  <a class="right carousel-control no_shade" href="#carousel-client" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		  </a>
		</div>
	</div>	
</div>

	

	<!-- FULL IMAGE UNIT -->
	<!-- ####################### -->	

	<div class="image_crop">		
		<!-- <img src="img/sush_image.jpg" class="full_image" alt="">	 -->
		<div class="container">
		<h1 class="phil">
			<?php
				 query_posts(array('cat' => 20) );
					while (have_posts()) : the_post();
				?>
			<i class="fa fa-quote-left"></i> 
			<?php the_content(); ?>
			<i class="fa fa-quote-right fa-pad"></i>
			 <?php endwhile; wp_reset_query();?>
		</h1>	
		</div>
		

	</div>		

	<!-- PARTNERS UNIT -->
	<!-- ####################### -->	

	<div class="partners_bg">
		<div class="container">			
			<a href="index.php?page_id=9">
				<h3 class="title_text">OUR PARTNERS</h3>			
			</a>
				<div class="row partners_wrapper">
					<?php
				 query_posts(array('cat' => 7, 'tag' => 'HomePartner') );
					while (have_posts()) : the_post();
				?>
					<div class="col-sm-4 col-xs-12 partners_unit">
						<?php if (class_exists('MultiPostThumbnails')) :  MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image', NULL,  'post-secondary-image-thumbnail img-thumbnail'); endif; ?>
						
						<h3 class="cap"><?php the_title(); ?></h3>
						<?php the_excerpt(); ?>
					</div>
					<?php endwhile; wp_reset_query(); ?>
					
				</div>			
		</div>		
	</div>

	<div class="blockquote_bg">
		<div class="container">
			<blockquote>
			  <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</h2>
			  <small class="cite">SUSHMOBILE 2013</small>
			</blockquote>						
		</div>
	</div>

	<!-- FEATURED UNIT -->
	<!-- ####################### -->		

	<div class="featured_bg"> 
		<div class="container">			
			<h3 class="title_text">FEATURED ON</h3>
			<div class="row featured_wrapper">
				<?php
				 query_posts(array('cat' => 17) );
					while (have_posts()) : the_post();
				?>

					<div class="featured_box col-sm-2 col-xs-6">
						<?php the_post_thumbnail('full'); ?>	
					</div>

				<?php endwhile; wp_reset_query();?>
						
			  		  	
			 </div>
		</div>
	</div>	

	<?php get_footer(); ?>