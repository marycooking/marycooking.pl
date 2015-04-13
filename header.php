<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title(); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="p:domain_verify" content="ef69bf04944a673a02d0af10ae8aaa67"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/bower_components/normalize-css/normalize.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic' rel='stylesheet' type='text/css'>
	 <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	 <link rel="Shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
	 <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/bower_components/jquery/jquery.min.js"></script>
	 <script type="text/javascript">
	 	$(document).ready(function() {
	 		$('.mataKoszt, .mataCzas').each(function(){
	 			var zawartosc = $(this).text();
	 			var podzielonaZawartosc = zawartosc.split(" ");
	 			$(this).html('<span>'+podzielonaZawartosc[0]+'</span>'+podzielonaZawartosc[1]);
	 		});
	 	});
	 </script>
	<?php wp_head(); ?>
</head>
<body>
	<div id="kontener">
		<header>
			<div id="logo">
				<h1><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/marycooking.png" alt="marycooking"></a></h1>
				<h2>Japońska kuchnia na polskie możliwości (oraz inne pyszności)</h2>
			</div>
			<nav>
				<?php wp_nav_menu( array('menu' => 'glowne' )); ?>
			</nav>
			<div class="clear"></div>
		</header>
		<div id="kontenerSrodkowy">