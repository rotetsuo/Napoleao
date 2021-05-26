<?php
	/**
	 *	Template name: Página Quiénes Somos
	 * @package WordPress
	 * @author Roberto Tetsuo
	 * @subpackage Twenty_Twenty_One
	 * @since Twenty Twenty-One 1.0
	 */

	get_header();
?>



<section class="bodyWhoWeAre">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="col-12 col-lg-6 col-xl-5">
				<h2><?php the_field('subtitulo'); ?></h2>
				<p> <?php the_content(); ?></p>				
			</div>
			<div class="col-12 col-lg-6 col-xl-6 offset-xl-1">
				<?php

					// Check rows exists.
					if( have_rows('galeria') ):
				?>
					<div id="slickQuemSomos">
				<?php
					    // Loop through rows.
					    while( have_rows('galeria') ) : the_row();
				?>
					<a data-fancybox="gallery" href="<?php the_sub_field('foto'); ?>">					
						<img class="quemSomosImagens" src="<?php the_sub_field('foto'); ?>">
					</a>
				<?php
					    endwhile;
				?>
					</div>
					<div id="slickArrowsRT">
					
					</div>
				<?php

					// No value.
					else :
					    // Do something...
					endif;
				?>
								
				
				
			</div>
			
		</div>
	</div>
</section>

<script type="text/javascript">
	
	$(document).ready(function(){
		$('#slickQuemSomos').slick({
			dots: false,
			infinite: true,
			speed: 500,
			arrows: true
		});
		$('.slick-prev').appendTo('#slickArrowsRT');
		$('.slick-next').appendTo('#slickArrowsRT');
		$('.slick-prev').html('<img src="<?php bloginfo('template_url'); ?>/assets/images/slickPrev.svg">');
		$('.slick-next').html('<img src="<?php bloginfo('template_url'); ?>/assets/images/slickNext.svg">');
	});
</script>

<?php
	get_footer();
?>