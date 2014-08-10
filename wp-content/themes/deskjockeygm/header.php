<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class($class); ?>>

<div class="main-wrap">

<header>
<div class="logo"><a href="/"><img src="<?php bloginfo('template_directory'); ?>/img/logo_large.png" alt="Desk Jockey General Manager" /></a></div>
<div class="tagline"><span>Fantasy sports analysis<br> for the part-time Desk Jockey,<br> full-time General Manager.</span></div>
<?php wp_nav_menu( array('menu' => 'main-menu' )); ?>
</header>