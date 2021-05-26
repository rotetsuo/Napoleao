<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
		<footer id="horarios">
			<div class="container">
				<a class="floatZap" href="https://api.whatsapp.com/send?phone=<?php the_field('numero_whatsapp', 5); ?>&text=Bien+venidos+a+Refill" target="_blank">
					<img src="<?php bloginfo('template_url'); ?>/assets/images/floatZap.svg">
				</a>
				<div class="row">
					<div class="col-12 col-md-3 headerMenu">
						<a href="<?php echo get_home_url(); ?>">
							<img src="<?php bloginfo('template_url'); ?>/assets/images/logoRefill.svg">
						</a>
					</div>
					<div class="col-12 col-md-7 headerMenu">
						<ul>
							<li>
								<?php the_field('endereco', 5); ?>
							</li>
							<li>
								<?php the_field('horario', 5); ?>
							</li>
						
						</ul>
					</div>
					<div class="col-12 col-md-2 headerMenu">

						<a href="<?php the_field('link_facebook', 5); ?>" class="socialLinkHeader" target="_blank">
							<img src="<?php bloginfo('template_url'); ?>/assets/images/redFbLogo.svg">
						</a>
						<a href="<?php the_field('link_instagram', 5); ?>" class="socialLinkHeader" target="_blank">
							<img src="<?php bloginfo('template_url'); ?>/assets/images/redIgLogo.svg">
						</a>
						<a href="https://api.whatsapp.com/send?phone=<?php the_field('numero_whatsapp', 5); ?>&text=Bien+venidos+a+Refill" class="socialLinkHeader" target="_blank">
							<img src="<?php bloginfo('template_url'); ?>/assets/images/redZapLogo.svg">
						</a>
					</div>
					
				</div>
			</div>
		</footer>

<?php wp_footer(); ?>

</body>
</html>
