<?php get_header(); ?>

<body <?php body_class($class); ?>>

<?php 
if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_content();
   endwhile;
endif;
?>
<?php edit_post_link(); ?>


<?php get_footer(); ?>
