<?php
	/**
	 *	Template name: Página Quem Sou
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
<section class="bodyQuemSou">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>
<section class="maisFotos">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2>Mais Fotos</h2>
			</div>
			<div class="col-1" id="slickPrev">
				
			</div>
			<?php

				// check if the repeater field has rows of data
				if( have_rows('mais_fotos') ):
			?>
			<div class="col-12 col-md-10" id="galeriaFotosQuemSou">
				<?php
					// loop through the rows of data
    				while ( have_rows('mais_fotos') ) : the_row();
				?>
				<a data-fancybox="gallery" href="<?php  the_sub_field('fotoquem_sou'); ?>">
					<img src="<?php  the_sub_field('fotoquem_sou'); ?>">
				</a>	
				<?php	
					endwhile;
				?>	
			</div>
			<?php
				else :

    			// no rows found

				endif;

			?>			
			<div class="col-1" id="slickNext">
				
			</div>
		</div>
		
	</div>
</section>

<script type="text/javascript">
	
	$(document).ready(function(){
		$('#galeriaFotosQuemSou').slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 2000,
			arrows: true,
			prevArrow:"<button type='button' class='slick-prev pull-left'><img src='<?php bloginfo('template_url'); ?>/assets/images/prev.png'></button>",
			nextArrow:"<button type='button' class='slick-next pull-right'><img src='<?php bloginfo('template_url'); ?>/assets/images/next.png'></button>",
			responsive: [
		    {
		      breakpoint: 992,
		      settings: {
		        arrows: true,
		        slidesToShow: 2
		      }
		    },
		    {
		      breakpoint: 768,
		      settings: {
		        arrows: false,
		        centerMode: false,
		        slidesToShow: 1,
		      }
		    }
		  ]
		});
		$(".slick-prev").appendTo("#slickPrev");
		$(".slick-next").appendTo("#slickNext");
	});

</script>

<?php
	get_footer();
?>