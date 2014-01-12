<?php
/*
Template Name: Blog Template
*/
get_header();
?>

<div class="nav_buffer"></div>	

<div class="blog_list_bg">

	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				
				<?php
					global $more;    // Declare global $more (before the loop).
				 query_posts(array('cat' => 13) );
					while (have_posts()) : the_post();
				?>

					<!-- BLOG SINGLE ITEM -->
					<div class="blog_list_item">
						<div class="row">
							<a class="col-sm-10" href="<?php the_permalink() ?>" title="Permanent Link to <?php if ( function_exists('the_title_attribute')) the_title_attribute(); else the_title(); ?>"><h2><?php the_title(); ?></h2></a>	
							<div class="col-sm-2 date_blog"><h2 class="cap"><?php 
								$d = "d M Y";
							echo get_the_date($d); ?></h2></div>
						</div>
		
						<div class="thickline"></div>
						<div class="row">
							<div class="col-sm-12 col-md-6 blog-img-wrapper">
								<?php the_post_thumbnail('full'); ?>	
							</div>		
							
							<div class="col-sm-12 col-md-6">
								<?php 
									
									$more = 0;       // Set (inside the loop) to display content above the more tag.
									the_content("Read More");
								?>	
							</div>
						</div>	
						<div class="thickline"></div>
						<!-- <div class="breakline"></div> -->
					</div>

			 	<?php endwhile; wp_reset_query();?>


					<!-- <div class="pagination_wrapper">
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
					</div> -->
					
			</div>

				<!-- Fixed Side Nav for Blog Links -->
				<!-- ######################################################## -->

				<!-- BLOG SIDE NAV -->				
					<?php get_sidebar(); ?>						

			</div>
		</div>

	</div>

	<?php get_footer(); ?>