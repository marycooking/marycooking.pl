<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title(); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/bower_components/normalize-css/normalize.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic' rel='stylesheet' type='text/css'>
	 <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>
<body>
	<div id="kontener">
		<header>
			<div id="logo">
				<h1><a href="#"><img src="<?php bloginfo('template_directory'); ?>/marycooking.png"></a></h1>
				<h2>Blog o prostym, ale pysznym jedzeniu</h2>
			</div>
			<nav>
				<?php wp_nav_menu(); ?> 
			</nav>
			<div class="clear"></div>
		</header>
		<div id="kontenerSrodkowy">