<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage custom-theme
 * @since custom-theme 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="utf-8"/>
	<title><?php bloginfo('title');?></title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat%3A100%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7COxygen%3A300%2Cregular%2C700%7CMontserrat%3A700%2C400%2C900%26amp%3Bsubset%3Dlatin&amp;subset=latin%2Call&amp;display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <link href="<?php bloginfo('template_directory'); ?>/favicon.png" rel="shortcut icon">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/mobile_menu.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<link rel='stylesheet' id='main style-css'  href='<?php bloginfo('template_directory'); ?>/style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>' media='all' />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<?php wp_head(); ?>
</head>
<body>
<section class="home-top">
	<div class="container clearfix">
		<div class="col-7 left pl-0 pr-0">
		  <div id="et-info">
		     <a href="tel:19702243366" class="left"><i class="fa fa-phone home-social" aria-hidden="true"></i><span id="et-info-phone">970-224-3366</span></a>
		     <ul class="social-icons left">
		        <li>
							<a href="https://www.facebook.com/sjwickcpa"><i class="fa fa-facebook home-social" aria-hidden="true"></i></a>
		        </li>
		        <li>
							<a href="http://www.linkedin.com/in/stevenwick" class="icon" target="_blank"><i class="fa fa-linkedin home-social" aria-hidden="true"></i></a>
						</li>
		     </ul>
		  </div>
		</div>
		<div class="col-5 left pl-0 pr-0">
			<a target="_blank" class="client-button" href="https://voffice.dillners.com/securelogin.asp?acct=134">Client Login</a>
		</div>
	</div>
</section>
<section class="home-navigation desktop-only">
	<div class="navigation-container">
		<div class="col-5 left pl-0 pr-0 home-logo">
			<img src="http://localhost:8888/tim/wordpress/sjwick/wp-content/uploads/2020/08/cropped-long-logo.png" class="logo-default" />
		</div>
		<div class="col-7 left pl-0 pr-0 nav-desktop">
			<?php
				$v = 0;
				$menuargs = array(
					"theme_location" => "primary",
					"menu_class" => "s-menu",
					"menu_id" => "MAIN-MENU",
				);
				$items = wp_get_nav_menu_items( 'MAIN-MENU', $menuargs);
			?>
			<nav class="clearfix">
				<ul id="header-desktop-menu" class="header-desktop-menu">
					<?php foreach( $items as $item ){ ?>
						<li class="menu-item"><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
					<?php } ?>
						<li class="menu-item"><a href="#"><i class="fa fa-search search-nav" aria-hidden="true"></i></a></li>
				</ul>
			</nav>
		</div>
	</div>
</section>
<div class="body-content">
