<?php
/*
Template Name: Jobs Template
*/
get_header();
?>

	<!-- ABOUT SUBMENU -->
		<div class="submenu_bg">
		<div class="container">
			<div class="submenu">
				<?php 
					$menuParameters = array(
					  'menu'			=> 'About Menu',
					  'container'       => false,
					  'echo'            => false,
					  'items_wrap'      => '%3$s',
					  'before'     => '<h5>',
					  'after'      => '</h5>'
					);

					echo strip_tags(wp_nav_menu( $menuParameters ), '<h5><a>' );
				?>			
			</div>		
		</div>
	</div>			

	<div class="nav_buffer"></div>

	<div class="container">
		<h3 class="title_text partner_title"><?php echo get_the_title(); ?></h3>	
		<div class="breakline"></div>				
	</div>			

	<div class="container">
		<div class="row">

	<?php 			
			query_posts(array('cat' => 19) );
			while (have_posts()) : the_post();
			
		?>
		<!-- Job Item -->
		<div class="col-md-8 position_item">
			<h2><?php the_title(); ?></h2>

			<?php if ( get_post_meta($post->ID, 'Job Category', true) ) : ?>
							<h4><b>Job Category:</b> <?php echo get_post_meta($post->ID, 'Job Category', true) ?></h4>
			<?php endif; ?>
			<?php if ( get_post_meta($post->ID, 'Location', true) ) : ?>
							<h4><b>Location:</b> <?php echo get_post_meta($post->ID, 'Location', true) ?></h4>
			<?php endif; ?>

			<?php the_content(); ?>
			
			<?php if ( get_post_meta($post->ID, 'Job Link', true) ) : ?>
				<div class="btn btn-danger btn-lg btn-color"><a href="<?php echo get_post_meta($post->ID, 'Job Link', true) ?>">APPLY NOW</a></div>
			<?php endif; ?>

			
						
		</div>					

		<div class="breakline"></div>				
		<?php endwhile; wp_reset_query();?>
							

		</div>
	</div>

	<?php get_footer(); ?>