<?php
/*
Template Name: Clients Template
*/
get_header();
?>

	<div class="client_list_bg">
		<div class="container">	
			<h3 class="title_text"><?php echo get_the_title(); ?></h3>	
			
			<div class="breakline"></div>			
			<div class="client_wrapper row">
				<?php query_posts(array('cat' => 12) );
			while (have_posts()) : the_post();
			?>
				<div class="col-sm-3 col-md-2 col-xs-6">
					<?php the_post_thumbnail('full'); ?>
				</div>
				<?php endwhile; wp_reset_query();?>
			</div>
			
			
		</div>
	</div>
	
	<?php get_footer(); ?>