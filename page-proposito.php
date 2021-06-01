<?php
	/**
	 *	Template name: Página Proposito
	 * @package WordPress
	 * @author Roberto Tetsuo
	 * @subpackage Twenty_Twenty_One
	 * @since Twenty Twenty-One 1.0
	 */

	get_header();
	$imagemDestaque = wp_get_attachment_url( get_post_thumbnail_id());
?>


<section class="bannerTopo" style="background-image: url('<?php echo $imagemDestaque; ?>');">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1><?php the_title(''); ?></h1>
			</div>
		</div>
	</div>
</section>
<section class="bodyQuemSou bodyProposito">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-10 offset-lg-1">
				<h2><?php the_field('subtitulo') ?></h2>
				<?php the_content(); ?>
			</div>
			<div class="col-3 d-none d-lg-flex" id="slickPrevAzul">
				
				<h3><?php the_field('motivacao_3'); ?></h3>
			</div>
			<div class="col-12 col-md-12 col-lg-6" id="sliderProposito">
				<div class="eachProposito">
					<div class="text-center eachPropositoTitle">
						<img src="<?php the_field('icone_motivacao_1'); ?>">				
						<h2><?php the_field('motivacao_1'); ?></h2>
					</div>
					<img src="<?php the_field('imagem_motivacao_1'); ?>">
					<?php the_field('texto_motivacao_1'); ?>
				</div>
				<div class="eachProposito">
					<div class="text-center eachPropositoTitle">
						<img src="<?php the_field('icone_motivacao_2'); ?>">
						<h2><?php the_field('motivacao_2'); ?></h2>
					</div>
					<img src="<?php the_field('imagem_motivacao_2'); ?>">
					<?php the_field('texto_motivacao_2'); ?>
				</div>
				<div class="eachProposito">
					<div class="text-center eachPropositoTitle">
						<img src="<?php the_field('icone_motivacao_3'); ?>">
						<h2><?php the_field('motivacao_3'); ?></h2>
					</div>
					<img src="<?php the_field('imagem_motivacao_3'); ?>">
					<?php the_field('texto_motivacao_3'); ?>
				</div>
			</div>
			<div class="col-3 d-none d-lg-flex" id="slickNextAzul">
				
				<h3><?php the_field('motivacao_2'); ?></h3>
			</div>
			<div class="col-12 col-md-12 col-lg-10 offset-lg-1">
				<h2><?php the_field('titulo_conclusao'); ?></h2>
				<p>
					<?php the_field('texto_conclusao'); ?>

				</p>
			</div>
		</div>
	</div>
</section>


<script type="text/javascript">
	
	$(document).ready(function(){
		var pathname = window.location.href; 
		var slide = pathname.split("#");

		$('#sliderProposito').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: false,
			arrows: true,
			prevArrow:"<button type='button' class='slick-prev pull-left'><img src='<?php bloginfo('template_url'); ?>/assets/images/prevAzul.png'></button>",
			nextArrow:"<button type='button' class='slick-next pull-right'><img src='<?php bloginfo('template_url'); ?>/assets/images/nextAzul.png'></button>",
			responsive: [
		    {
		      breakpoint: 992,
		      settings: {
		        arrows: false,
		        centerMode: false,
		        slidesToShow: 1,
		        dots: true
		      }
		    }
		  ]
		});
		
		var slider = $( '#sliderProposito' );
slider[0].slick.slickGoTo(parseInt(slide[1]));

		$('#sliderProposito').on('afterChange', function(event, slick, currentSlide, nextSlide){
			var tituloPrincipal = $(".slick-current h2").text();
			if(tituloPrincipal == "<?php the_field('motivacao_1'); ?>"){
				$("#slickPrevAzul h3").text("<?php the_field('motivacao_3'); ?>");
				$("#slickNextAzul h3").text("<?php the_field('motivacao_2'); ?>");
			}else if(tituloPrincipal == "<?php the_field('motivacao_2'); ?>"){
				$("#slickPrevAzul h3").text("<?php the_field('motivacao_1'); ?>");
				$("#slickNextAzul h3").text("<?php the_field('motivacao_3'); ?>");
			}else{
				$("#slickPrevAzul h3").text("<?php the_field('motivacao_2'); ?>");
				$("#slickNextAzul h3").text("<?php the_field('motivacao_1'); ?>");
			}
		});
		$(".slick-prev").prependTo("#slickPrevAzul");
		$(".slick-next").appendTo("#slickNextAzul");
		$("#slickPrevAzul h3").appendTo(".slick-prev");
		$("#slickNextAzul h3").prependTo(".slick-next");
		

	});

</script>

<?php
	get_footer();
?>