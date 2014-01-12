<?php
/*
Template Name: Leadership Template
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

	<!-- NAV BUFFER -->
	<div class="nav_buffer"></div>

	<!-- SINGLE BANNER -->
	<div class="single_banner_bg">
		<?php the_post_thumbnail('full', array('class' => 'hidden-xs single_banner img-responsive')); ?>		
	</div>		

	<div class="container leadership">
		<h3 class="title_text partner_title"><?php echo get_the_title(); ?></h3>	
				
		<h2 class="subtext">WE ARE 26 STRONG</h2>	
		<div class="breakline"></div>				
	</div>				

	<div class="staff_list_bg">
		<div class="container">	
			
			<div class="staff_wrapper">
				<?php query_posts(array('cat' => 6) );
			while (have_posts()) : the_post();
			?>
				<div class="staff_item col-sm-2 col-xs-6">
					<?php the_post_thumbnail('full', array('class' => 'img-rounded img-thumbnail')); ?>
					
					<h4><?php the_title(); ?></h4>
					<H6><?php the_excerpt() ?></h6>
				</div>
			<?php endwhile; wp_reset_query();?>								
			</div>
			
		</div>
	</div>


	<?php get_footer(); ?>