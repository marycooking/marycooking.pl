<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title(); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>/bower_components/normalize-css/normalize.css">
	 <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>
<body>
	<div id="kontener">
		<header>
			<div id="logo">
				<h1><a href="#"><img src="marycooking.png"></a></h1>
				<h2>Mam płytę indukcyjną to korzystam</h2>
			</div>
			<nav>
				<ul>
					<li><a href="#">Mięso</a></li>
					<li><a href="#">Japonia</a></li>
					<li><a href="#">Słodkości</a></li>
					<li><a href="#">Warzywa</a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</header>
		<div id="kontenerSrodkowy">