<?php get_header(); ?>

<body <?php body_class($class); ?>>
	<div class="body-content">
		<?php 
		if (have_posts()) :
		   while (have_posts()) :
		      the_post(); ?>
		         <h2><?php the_title(); ?></h2>
		         <?php the_content(); ?>
		   <?php endwhile;
		endif; ?>
		
		<?php comments_template(); ?> 
	</div><!--body_content-->


<?php get_footer(); ?>
