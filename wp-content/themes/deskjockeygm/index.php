<?php get_header(); ?>

<body <?php body_class($class); ?>>
	<div class="body-content">
		<?php 
		if (have_posts()) :
		   while (have_posts()) :
		      the_post(); ?>
		         <h2 class="page_title"><?php the_title(); ?></h2>
		         <?php if ( ! is_page() ) {?><div class="date"><?php the_date(); ?></div><?php } ?>
		         <?php the_content(); ?>
		   <?php endwhile;
		endif; ?>
		
		<?php if ( ! is_page() ) {?><?php comments_template(); ?><?php } ?>
	</div><!--body_content-->


<?php get_footer(); ?>
