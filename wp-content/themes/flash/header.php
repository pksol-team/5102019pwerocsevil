<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/tahoma.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper">
<header id="header" role="banner">
	<div class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php dynamic_sidebar('header-top'); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="logo-or-menu">
		<div class="container">
			<div class="row">
			<div class="col-sm-12 col-md-3"><?php dynamic_sidebar( 'logo' ); ?></div>
			<div class="col-sm-12 col-md-9"><?php dynamic_sidebar( 'menu-and-search' ); ?></div>
		</div>
		</div>
	</div>
</header>
<div class="container">