<?php
	/**
	 *	Template name: Página Galeria
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
<section class="bodyGaleria">
	<div class="container">
		<div class="row">
			<?php
				// check if the repeater field has rows of data
				if( have_rows('galeria_de_fotos') ):

				 	// loop through the rows of data
				    while ( have_rows('galeria_de_fotos') ) : the_row();
			?>
			<div class="col-6 col-md-6 col-lg-4">
				<a data-fancybox="gallery" href="<?php the_sub_field('fotogaleria'); ?>" data-caption="<?php the_sub_field('legenda_imagem'); ?>">
					<img src="<?php the_sub_field('fotogaleria'); ?>">
				</a>
			</div>
			<?php 
				 endwhile;

			else :
			    // no rows found
			endif;
			?>
		</div>
	</div>
</section>



<?php
	get_footer();
?>