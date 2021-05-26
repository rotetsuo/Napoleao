<?php
	/**
	 *	Template name: Página Home
	 * @package WordPress
	 * @author Roberto Tetsuo
	 * @subpackage Twenty_Twenty_One
	 * @since Twenty Twenty-One 1.0
	 */

	get_header();
?>

<section id="sliderHome">
    <div id="ca1">
        <img src="<?php the_field('foto_1'); ?>">
    </div>
    <div id="ca2">
        <img src="<?php the_field('foto_2'); ?>">
    </div>
    <div id="ca3">
        <img src="<?php the_field('foto_3'); ?>">
</section>
<section class="foodSuggestions">
	<div class="container">
		<div class="row">
			<div id="food1" class="col-12 col-md-4 eachFood">
				<p class="foodTag"><?php the_field('tipo_foto_1'); ?></p>
				<h2><?php the_field('titulo_foto_1'); ?></h2>
				<p class="f1"><?php the_field('descricao_foto_1'); ?></p>
				<span class="foodSeparator f1"></span>
			</div>
			<div id="food2" class="col-12 col-md-4 text-center eachFood">
				<p class="m-auto foodTag"><?php the_field('tipo_foto_2'); ?></p>
				<h2><?php the_field('titulo_foto_2'); ?></h2>
				<p><?php the_field('descricao_foto_2'); ?></p>
				<span class="foodSeparator f2"></span>
			</div>
			<div id="food3" class="col-12 col-md-4 eachFood f2">				
				<p class="foodTag"><?php the_field('tipo_foto_3'); ?></p>
				<h2><?php the_field('titulo_foto_3'); ?></h2>
				<p><?php the_field('descricao_foto_3'); ?></p>	
			</div>
		</div>
	</div>
</section>
<section class="whoWeAre">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center d-md-none">
				
			</div>
			<div class="col-12 col-md-6 col-lg-7">
				<img src="<?php the_field('foto_quienes_somos'); ?>">
			</div>
			<div class="col-12 col-md-6 col-lg-4 offset-lg-1">
				<p class="normalTag">Quiénes somos</p>
				<h2 class="homeTitle"><?php the_field('titulo_quienes_somos'); ?></h2>
				<p class="titleDisc">
					<?php the_field('texto_quienes_somos'); ?>
				</p>
				<a href="/quienes-somos" class="seeMore">Lea más</a>
			</div>
		</div>
	</div>
</section>
<section class="ourMenu">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<p class="normalTag m-auto">menú</p>
				<h2 class="homeTitle"><?php the_field('titulo_menu'); ?></h2>
			</div>
			<div class="col-12 col-md-10 offset-md-1 col-lg-6 offset-lg-3 text-center">
				<p class="titleDisc">
					<?php the_field('titulo_menu'); ?>
			</div>
			<div class="col-12 col-md-4 col-lg-4  text-center eachMenu">
				<img src="<?php bloginfo('template_url'); ?>/assets/images/sushiIcon.svg">
				<h3><?php the_field('titulo_sushi'); ?></h3>
				<p class="titleDisc">
					<?php the_field('descricao_sushi'); ?>
				</p>
			</div>
			<div class="col-12 col-md-4 col-lg-4 text-center eachMenu menuCenter">
				<img src="<?php bloginfo('template_url'); ?>/assets/images/hamburguerIcon.svg">			
				<h3><?php the_field('titulo_hamburguesa'); ?></h3>	
				<p class="titleDisc">
					<?php the_field('descricao_hamburguesa'); ?>
				</p>
			</div>
			<div class="col-12 col-md-4 col-lg-4 text-center eachMenu">
				<img src="<?php bloginfo('template_url'); ?>/assets/images/alitaIcon.svg">
				<h3><?php the_field('titulo_alitas'); ?></h3>
				<p class="titleDisc">
					<?php the_field('descricao_alitas'); ?>
				</p>
			</div>
			<div class="col-12">
				<a href="<?php the_field('arquivo_menu'); ?>" class="seeMore" target="_blank">Acceda al menú completo</a>
			</div>
		</div>
	</div>
</section>
<section class="ourLocation">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-4 col-lg-3 offset-lg-1">
				<p class="normalTag">Donde estamos</p>
				<img class="refillLogo" src="<?php bloginfo('template_url'); ?>/assets/images/logoRefill.svg">
				<div class="restInfo">
					<img src="<?php bloginfo('template_url'); ?>/assets/images/pinIcon.svg">
					<p><?php the_field('endereco'); ?></p>
				</div>
				<div class="restInfo">
					<img src="<?php bloginfo('template_url'); ?>/assets/images/clockIcon.svg">
					<p><?php the_field('horario'); ?></p>
				</div>
				<div class="restInfo">
					<img src="<?php bloginfo('template_url'); ?>/assets/images/phoneIcon.svg">
					<p><?php the_field('telefone'); ?></p>
				</div>
				<a href="https://api.whatsapp.com/send?phone=<?php the_field('numero_whatsapp'); ?>&text=Bien+venidos+a+Refill" class="seeMore" target="_blank">haga tu pedido</a>
			</div>
			<div class="col-12 col-md-8 col-lg-6 offset-lg-1">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d336.3420368430417!2d-63.171660104791165!3d-17.754777340528364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93f1e7c6fcfa6aab%3A0xf70e06b974619f1b!2sRefill!5e0!3m2!1spt-BR!2sbr!4v1618448710499!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
			<div class="col-12 d-md-none">
				
			</div>
		</div>
	</div>
</section>
<section class="ourInstagram">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2 class="homeTitle">Nuestro Instagram</h2>
			</div>
			<div class="col-12 col-md-10 offset-md-1 col-lg-6 offset-lg-3 text-center">
			</div>
			<div class="col-12">
				<?php
					echo do_shortcode('[instagram-feed]');
				?>
			</div>
			<div class="col-12 text-center">
				<a href="<?php the_field('link_instagram'); ?>" class="seeMore" target="_blank">ver más</a>
			</div>
		</div>
	</div>	
</section>
<section class="ourBlog">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2 class="homeTitle">Nuestro Blog</h2>
			</div>


            <?php
	            // The Query
	            $args = array(
	              'post_type' => 'post',
	              'orderby' => 'date',
	              'posts_per_page' => 3
	            );
            	$the_query = new WP_Query( $args );
             	// The Loop
            	if ( $the_query->have_posts() ) {
              		while ( $the_query->have_posts() ) { $the_query->the_post(); 
                		if(has_post_thumbnail()) {
                  			$imagemDestaque = wp_get_attachment_url( get_post_thumbnail_id());
                		} else {
                  			$imagemDestaque = get_template_directory_uri()."/assets/images/imgPadrao.jpg";
                		}
			?>
			<div class="col-12 col-md-4 eachBlogPost">
				<a href="<?php the_permalink(); ?>">
					<img src="<?php echo $imagemDestaque; ?>">
					<h3><?php the_title(); ?></h3>
					<p class="foodTag"><?php echo get_the_date('d/m/y'); ?></p>
				</a>
			</div>
			<?php
					}
				}
			?>
		</div>
	</div>
</section>
<section class="homeContact">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<p class="normalTag m-auto">Contacto</p>
			</div>
			<div class="col-12 col-md-8 offset-md-2 text-center">
				<h2 class="homeTitle">
					Envía un mensaje por WhatsApp y haga tu pedido
				</h2>
			</div>
			<div class="col-12 col-md-6 offset-md-3 text-center">
				<a href="https://api.whatsapp.com/send?phone=<?php the_field('numero_whatsapp'); ?>&text=Bien+venidos+a+Refill" class="seeMore" target="_blank">Quiero hacer mi pedido</a>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	
	$(document).ready(function(){

		$('#sliderHome').slick({
			dots: true,
			infinite: true,
			speed: 500,
			fade: true,
			arrows: false,
			cssEase: 'linear'
		});

		if($(window).width() < 768){
			$("#food1").appendTo("#slick-slide00");
			$("#food2").appendTo("#slick-slide01");
			$("#food3").appendTo("#slick-slide02");
			$(".whoWeAre .normalTag").appendTo(".whoWeAre .d-md-none");
			$(".whoWeAre .homeTitle").appendTo(".whoWeAre .d-md-none");
			$(".ourLocation .seeMore").appendTo(".ourLocation .d-md-none");
			
		}
	});
</script>


<?php
	get_footer();
?>