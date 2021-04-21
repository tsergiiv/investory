<!doctype html>
<html <?php language_attributes(); ?>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('title'); ?></title>
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/img/icons/favicon-light.ico?light" media="(prefers-color-scheme:no-preference)">
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/img/icons/favicon-dark.ico?dark"  media="(prefers-color-scheme:dark)">
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/img/icons/favicon-light.ico?light" media="(prefers-color-scheme:light)">
    <?php wp_head(); ?>
</head>

<body>
	<header class="flex">
	<div class="container-main">
		<div class="container-inner flex">
			<div class="logo">
				<img src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" alt="Logo">
			</div>
			<div class="menu">Menu</div>
			<nav>
				<a href="#section-we-know">Problem Statement</a>
				<a href="#section-solutions">Solution</a>
				<a href="#section-business">Business Model</a>
				<a href="#section-success">Success Story</a>
				<a href="#section-market">Market Overview</a>
				<a href="#section-news">Industry Highlights</a>
				<a href="#" data-toggle="modal-contacts" class="modal-toggle">Let's Connect!</a>
			</nav>
		</div>
	</div>
</header>
