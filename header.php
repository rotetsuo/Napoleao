<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>	
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<header>
		<div class="container d-none d-md-block">
			<div class="row">
				<div class="col-12 col-md-3 col-lg-2 col-xl-3">
					<a href="<?php echo get_home_url(); ?>">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/logoRefill.svg">
					</a>
				</div>
				<div class="col-12 col-md-9 col-lg-10 col-xl-9 headerMenu">
					<a class="menuItem" href="<?php echo get_home_url(); ?>">home</a>
					<a class="menuItem" href="/quienes-somos">quiénes somos</a>
					<a class="menuItem" href="#horarios">horarios</a>
					<a class="menuItem" href="<?php the_field('arquivo_menu', 5); ?>" target="_blank">menú</a>
					<a class="menuItem" href="/blog">blog</a>
					<a class="menuItem" href="/contacto">contacto</a>

					<a href="https://api.whatsapp.com/send?phone=<?php the_field('numero_whatsapp', 5); ?>&text=Bien+venidos+a+Refill" target="_blank" class="btnHeaderZap d-none d-lg-flex">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/logoZap.svg">
						haga su pedido
					</a>
					<a href="https://api.whatsapp.com/send?phone=<?php the_field('numero_whatsapp', 5); ?>&text=Bien+venidos+a+Refill"  target="_blank" class="btnHeaderZap d-flex d-lg-none">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/logoZap.svg">
						
					</a>
					<a href="<?php the_field('link_facebook', 5); ?>" target="_blank" class="socialLinkHeader d-none d-lg-flex">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/logoFb.svg">
					</a>
					<a href="<?php the_field('link_instagram', 5); ?>" target="_blank" class="socialLinkHeader d-none d-lg-flex">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/logoIg.svg">
					</a>
				</div>
			</div>
		</div>
		<div class="container d-md-none">
			<div class="row">
				<div class="col-4 offset-4 headerMenu">
					<a href="<?php echo get_home_url(); ?>">
						<img class="siteLogo" src="<?php bloginfo('template_url'); ?>/assets/images/logoRefill.svg">
					</a>
				</div>
				<div class="col-4 text-right">
				<a class="headerBtnMobile" data-toggle="collapse" href="#collapseMenu" role="button" aria-expanded="false" aria-controls="collapseMenu">
					<svg class="ham hamRotate ham4" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
					  <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
					  <path class="line middle" d="m 70,50 h -40" />
					  <path class="line bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
					</svg>
				</a>
					  
				</div>
				<div class="col-12">
					<div class="collapse text-center menuMobile" id="collapseMenu">
						<ul>
							<li>
								<a href="<?php echo get_home_url(); ?>">home</a>
							</li>
							<li>
								<a href="/quienes-somos">quiénes somos</a>
							</li>
							<li>
								<a href="#horarios">horarios</a>
							</li>
							<li>
								<a href="<?php the_field('arquivo_menu', 5); ?>">menú</a>
							</li>
							<li>
								<a href="/blog">blog</a>
							</li>
							<li>
								<a href="/contacto">contacto</a>
							</li>
						</ul>
						<a href="https://api.whatsapp.com/send?phone=<?php the_field('numero_whatsapp', 5); ?>&text=Bien+venidos+a+Refill" target="_blank" class="btnHeaderZap">
							<img src="<?php bloginfo('template_url'); ?>/assets/images/logoZap.svg">
							haga su pedido
						</a>
						<a href="<?php the_field('link_facebook', 5); ?>" class="socialLinkHeader">
							<img src="<?php bloginfo('template_url'); ?>/assets/images/logoFb.svg">
						</a>
						<a href="<?php the_field('link_instagram', 5); ?>" class="socialLinkHeader">
							<img src="<?php bloginfo('template_url'); ?>/assets/images/logoIg.svg">
						</a>
					</div>
				</div>
			
			</div>
		</div>
	</header>

