<?php get_header(); ?>

<div class="content-wrap">
	<div class="left-side">
		<?php 
		if (have_posts()) :
		   while (have_posts()) :
		      the_post(); ?>
		    <?php if (($wp_query->current_post) % 2) $class="evenPost"; else $class="oddPost"; ?>
		  	<div <?php post_class($class); ?> <?php if( $wp_query->current_post == 0 && !is_paged() ) { echo 'id="first"'; } ?>>
				<div class="feature-image"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'large' ); ?></a></div>
				<div class="text-wrap">
					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			        <?php the_excerpt(); ?>
			        <div class="read-more"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Read More</a></div>
		    	</div><!--text-wrap-->
		    </div><!--single-post-->
		   <?php endwhile;
		endif; ?>
		<?php edit_post_link(); ?>
	</div><!--left-side-->

	<div class="right-side">
		<div class="content">
			<h3>Straight from the commish's desk:</h3>
			<?php fetchTweets( array( 'screen_name' => 'samkirtley' ) ); ?>
		</div><!--content-->
	</div><!--right-side-->
	<div class="clear"></div>
</div><!--content-wrap-->

<?php get_footer(); ?>