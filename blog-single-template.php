<?php
/*
Template Name: Blog Single Template
*/
get_header();
?>	

	<div class="blog_single_buffer"></div>	

	<div class="blog_single_bg">

		<div class="container">
			<div class="row">
				<div class="col-sm-9">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
				<div class="blog_single_wrap">
					<div class="row">
						<a class="col-sm-10 col-xs-12" href="<?php the_permalink() ?>" title="Permanent Link to <?php if ( function_exists('the_title_attribute')) the_title_attribute(); else the_title(); ?>"><h2><?php the_title(); ?></h2></a>
						
						<div class="col-sm-2 date_blog"><h2 class="cap"><?php 
								$d = "d M Y";
							echo get_the_date($d); ?></h2></div>
					</div>
					
					<div class="thickline"></div>
					<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
					<h5 class="blog_author">By <?php echo get_the_author(); ?></h5>
				
					<?php the_content(); ?>					
				</div>	
				<?php endwhile; endif; ?>
				</div>

				<!-- BLOG SIDE NAV -->				
					<?php get_sidebar(); ?>					

			</div>
		</div>

	</div>
	
	<?php get_footer(); ?>