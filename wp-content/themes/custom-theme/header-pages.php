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
  <link href="<?php bloginfo('template_directory'); ?>/favicon.png" rel="shortcut icon">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/mobile_menu.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<link rel='stylesheet' id='main style-css'  href='<?php bloginfo('template_directory'); ?>/style.css?version=1.2' media='all' />
	<link rel='stylesheet' id='main style-css'  href='<?php bloginfo('template_directory'); ?>/style-page.css?<?php echo date('l jS \of F Y h:i:s A'); ?>' media='all' />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<?php wp_head(); ?>
</head>
<body>
<?php
	$v = 0;
	$menuargs = array(
		"theme_location" => "primary",
		"menu_class" => "s-menu",
		"menu_id" => "MAIN-MENU",
	);
	$items = wp_get_nav_menu_items( 'MAIN-MENU', $menuargs);
?>
<section class="page-navigation desktop-only">
	<div class="col-12 pr-0 pl-0 home-nav-container">
		<div class="container pl-0 pr-0 pt-4">
			<div class="col-4 left pr-0">
				<a href="<?php echo get_option('home'); ?>" class="link-home">
					<h4 class="opensans-bold">SOLVENT TRAPS USA</h4>
				</a>
			</div>
			<div class="col-4 left">
				<nav class="clearfix mobiletop tp-2">
					<ul id="menu-footer-menu" class="menu">
						<?php foreach( $items as $item ){ ?>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-4"><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
						<?php } ?>
					</ul>
				</nav>
			</div>
			<div class="col-4 left">
				<div class="parallelogram">
					<div class="normalize-shape">
						<a>(877) MY-FORM 1 | (877) 693-6761</a>
					</div>
				</div>
			</div>
		</div>
</section>
<section class="home-mobile-menu hide-mobile">
	<ul class="mobile-pop-menu">
		<?php foreach( $items as $item ){ ?>
			<li class="mobile-item"><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
		<?php } ?>
	</ul>
</section>
<section class="home-navigation-mobile mobile-only">
	<div class="col-8 left pr-0">
		<a href="<?php echo get_option('home'); ?>" class="link-home">
			<h4 class="mobile-header opensans-bold">SOLVENT TRAPS USA</h4>
		</a>
	</div>
	<div class="col-3 left pr-0 ml-2">
		<div class="parallelogram-mobile-default left">
			<div class="normalize-shape-default">
				<a class="opensans-bold fp-btn pl-2">
					<i class="fa fa-bars text-black icon-mobile" aria-hidden="true"></i>
					<BR/>
					<span class="t-mobile">MENU</span>
				</a>
			</div>
		</div>
	</div>
</section>
<section class="page-title">
	<div class="col-12 pr-0 home-nav-container">
		<div class="container pl-1 pr-0 pt-0 page-title-container">
			<h2 class="uppercase page-title txt-yellow opensans-bold"><?php the_title();?></h2>
		</div>
	</div>
</section>
