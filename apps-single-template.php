<?php
/*
Template Name: Apps Single Template
*/
get_header();
?>


	

	<!-- SINGLE BANNER -->
	<!-- <div class="nav_buffer"></div>	 -->

<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>





	<div class="single_banner_bg">
		<?php if (class_exists('MultiPostThumbnails')) :  MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'third-image', NULL,  'post-secondary-image-thumbnail hidden-xs single_banner img-responsive'); endif; ?>
	</div>		

	<!-- APPS_DETAILS UNIT -->
		<!-- APPS SINGLE DETAIL UNIT-->
	<!-- ####################### -->	

	<div class="apps_detail_bg">		
		<div class="container">
			<div class="row">
				<div class="col-sm-8 apps_title_wrapper">
					<?php the_post_thumbnail('full', array('class' => 'apps_detail_icon img-thumbnail img-rounded')); ?>
					
					<h1 class="cap"><?php the_title(); ?></h1>
					<?php if ( get_post_meta($post->ID, 'AppCompany', true) ) : ?>
						<h2 class="cap"><?php echo get_post_meta($post->ID, 'AppCompany', true) ?></h2>
					<?php endif; ?>								
				
					<div class="apps_description">
						<?php the_excerpt(); ?>
					</div>
				</div>
				<div class="col-sm-4 col-xs-12">
					<div class="app_detail_specs">

						<?php if ( get_post_meta($post->ID, 'AppSpecOne', true) ) : ?>
							<h4><?php echo get_post_meta($post->ID, 'AppSpecOne', true) ?></h4>
						<?php endif; ?>

						<?php if ( get_post_meta($post->ID, 'AppSpecTwo', true) ) : ?>
							<h3><?php echo get_post_meta($post->ID, 'AppSpecTwo', true) ?></h3>
						<?php endif; ?>
						
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

				<?php  $args = array(
   'post_type' => 'attachment',
   'numberposts' => -1,
   'post_status' => null,
   'post_parent' => $post->ID
  );

  $attachments = get_posts( $args );
  $pik = 0;

     if ( $attachments ) {

     	$attlen = sizeof($attachments);
     	
        foreach ( $attachments as $attachment ) {

        	if($pik < ($attlen-1)){

           		$pp =  wp_get_attachment_image_src($attachment->ID, 'full');
           ?>
			<a class="app_screenshots img-responsive" href="<?php echo $pp[0]; ?>" data-gallery>
			        <img src="<?php echo $pp[0]; ?>">
			</a>
           <?php
           		
           		$pik++;
        	}

         }

     }

     ?>

			    
			    	    		    		    		    		    
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
					<?php the_content(); ?>
				</div>
			</div>			
		</div>		
	</div> 			
<?php endwhile; endif; ?>
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

	<?php get_footer(); ?>