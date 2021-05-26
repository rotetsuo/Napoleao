<?php
	/**
	 *	Template name: Página Contacto
	 * @package WordPress
	 * @author Roberto Tetsuo
	 * @subpackage Twenty_Twenty_One
	 * @since Twenty Twenty-One 1.0
	 */

	get_header();
?>


<section class="ourLocation">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-4 col-lg-3">
				<p class="normalTag"><?php the_title(); ?></p>
				<img class="refillLogo" src="<?php bloginfo('template_url'); ?>/assets/images/logoRefill.svg">
				<div class="restInfo">
					<img src="<?php bloginfo('template_url'); ?>/assets/images/pinIcon.svg">
					<p><?php the_field('endereco', 5); ?></p>
				</div>
				<div class="restInfo">
					<img src="<?php bloginfo('template_url'); ?>/assets/images/clockIcon.svg">
					<p><?php the_field('horario', 5); ?></p>
				</div>
				<div class="restInfo">
					<img src="<?php bloginfo('template_url'); ?>/assets/images/phoneIcon.svg">
					<p><?php the_field('telefone', 5); ?></p>
				</div>
				<a href="https://api.whatsapp.com/send?phone=<?php the_field('numero_whatsapp', 5); ?>&text=Bien+venidos+a+Refill" class="seeMore" target="_blank">haga tu pedido</a>
				<h3>ou</h3>
				<a href="<?php the_field('arquivo_menu', 5); ?>" class="seeMore" target="_blank">Acceda al menú completo</a>
			</div>
			<div class="col-12 col-md-8 col-lg-6 offset-lg-1">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d336.3420368430417!2d-63.171660104791165!3d-17.754777340528364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93f1e7c6fcfa6aab%3A0xf70e06b974619f1b!2sRefill!5e0!3m2!1spt-BR!2sbr!4v1618448710499!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
			<div class="col-12 d-md-none">
				
			</div>
		</div>
	</div>
</section>


<?php
	get_footer();
?>