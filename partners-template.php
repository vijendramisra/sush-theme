<?php
/*
Template Name: Partners Template
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
		
	<?php 
			$i=0;
			query_posts(array('cat' => 7) );
			while (have_posts()) : the_post();
			if (($i % 2) == 0){
		?>
		<!-- LEFT MODULE UNIT -->
		<!-- LEFT MODULE UNIT -->
	<div class="apps_left_bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>	
				</div>				
				<div class="col-sm-6">
					<h3><?php the_title(); ?></h3>
					<?php the_content(); ?>
				</div>
			</div>
		</div>		
	</div>
	<?php }
		else{
	?>
	<!-- RIGHT MODULE UNIT -->
	<!-- RIGHT MODULE UNIT -->

	<div class="apps_right_bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<h3><?php the_title(); ?></h3>
					<?php the_content(); ?>
				</div>
				<div class="col-sm-6 col-xs-12">
					<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>	
				</div>								
			</div>
		</div>		
	</div>				
	<?php } ?>
		<?php $i++; endwhile; wp_reset_query();?>			

	<?php get_footer(); ?>