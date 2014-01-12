<div class="side_blog_list hidden-xs col-sm-3">
		<h2>PAST POSTING</h2>
	<?php
		query_posts(array('cat' => 13) );

		$i = 1; while (have_posts() && $i < 6) : the_post();
	?>
		<div class="thickline"></div>
		<a href="<?php the_permalink() ?>" title="Permanent Link to <?php if ( function_exists('the_title_attribute')) the_title_attribute(); else the_title(); ?>"><?php the_title(); ?></a>
		<p class="cap">- <?php 
								$d = "d M Y";
							echo get_the_date($d); ?></p>
	<?php
	$i++;
	endwhile; 
	wp_reset_query();

	?>
		
</div>