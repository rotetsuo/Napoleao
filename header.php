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
	<link rel="stylesheet" href="https://use.typekit.net/lkz0zjh.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<header>
		<div class="container d-none d-lg-block">
			<div class="row">
				<div class="col-12 col-md-3 col-lg-4">
					<a href="<?php echo get_home_url(); ?>" class="headerTitle"> 
						Napoleão Bernardes
					</a>
				</div>
				<div class="col-12 col-md-9 col-lg-8  headerMenu">
					<?php
                        $defaults = array(
                        'theme_location'  => 'primary',
                        'container'       => false,
                        'menu_class'      => 'list-inline list-unstyled box-menu-header',
                        'menu_id'         => 'menu',
                        'echo'            => true
                        );
                        wp_nav_menu($defaults);
                    ?>	
                    <a class="btnNapoleao" href="/contato">contato</a>
				</div>
			</div>
		</div>
		<div class="container d-lg-none">
			<div class="row">
				<div class="col-9 headerMenu">
										
					<a href="<?php echo get_home_url(); ?>" class="headerTitle"> 
						Napoleão Bernardes
					</a>
				</div>
				<div class="col-3 text-right btnHeaderMenu">
					<a class="headerBtnMobile" data-toggle="collapse" href="#collapseMenu" role="button" aria-expanded="false" aria-controls="collapseMenu">
						<input type="checkbox" />
					    
					    <span></span>
					    <span></span>
					    <span></span>
					</a>
					  
				</div>
				<div class="col-12 menuMobile">
					<div class="collapse text-center" id="collapseMenu">
						<?php
	                        $defaults = array(
	                        'theme_location'  => 'primary',
	                        'container'       => false,
	                        'menu_class'      => 'list-inline list-unstyled box-menu-header',
	                        'menu_id'         => 'menu',
	                        'echo'            => true
	                        );
	                        wp_nav_menu($defaults);
	                    ?>	
                    	<a class="btnNapoleao" href="/contato">contato</a>
						
					</div>
				</div>
			
			</div>
		</div>
	</header>

