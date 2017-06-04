<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title><?php wp_title(); ?><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
		<link type="text/css" rel="stylesheet" href="<?php bloginfo('onepage.css'); ?>" />
	</head>
	<body>
		<div id="wrapper">
			<header>
				<h2><?php bloginfo('name'); ?></h2>
			</header>
			<nav>
				<?php $opties = array('container_class' => 'menu', 'theme_location' => 'hoofdmenu'); wp_nav_menu($opties); ?>
			</nav>