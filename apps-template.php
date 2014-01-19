<?php
/*
Template Name: Apps Template
*/
get_header();
?>


		<!--  APPS PAGE -->
	<!-- ####################### -->	

	<div class="apps_page_bg">
		<div class="container">
			<h3 class="title_text">OUR APPS</h3>	
			<h5 class="platform_tags">
				<span>All</span>
				<span>IOS</span>
				<span>Android</span>
				<span>iPad</span>
				<span>Android Tablet</span>
				<span>Windows Mobile</span>
				<span>Blackberry</span>
				<span>Responsive Web</span>  
			</h5>
			<div class="breakline"></div>

			<!-- ROW 1 -->

			<ul class="row">
				<?php
				 query_posts(array('cat' => 21) );
					while (have_posts()) : the_post();
				?>
				<li class="col-md-3 col-sm-6 col-xs-6">

					<a href="<?php the_permalink() ?>" title="Permanent Link to <?php if ( function_exists('the_title_attribute')) the_title_attribute(); else the_title(); ?>">

					<div class="apps_page_item thumbnail">
						<?php if (class_exists('MultiPostThumbnails')) :  MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image', NULL,  'post-secondary-image-thumbnail img-responsive'); endif; ?>	
						
						      <div class="caption">
        					<h3 class="cap"><?php the_title(); ?></h3>
        					<?php if ( get_post_meta($post->ID, 'AppCompany', true) ) : ?>
								<h4><?php echo get_post_meta($post->ID, 'AppCompany', true) ?></h4>
							<?php endif; ?>
        				</div>
					</div>

					</a>

				</li>
				<?php endwhile; wp_reset_query();?>
			</ul>

				
		</div>		<!-- Container End  -->		
	</div>	
	
	<?php get_footer(); ?>