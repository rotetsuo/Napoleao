<?php
	/**
	 *	Template name: Página Realizações
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
<section class="bodyTime">
	<div class="container">
		<div class="row">
			<div class="col-5 d-none d-md-block">
				
			</div>
			<div class="col-2 timeLine">
				<span class="line firstLine"></span>
			</div>
			<div class="col-10 col-md-5">
				
			</div>
			
			<?php

				// check if the repeater field has rows of data
				if( have_rows('timeline') ):
					$cont = 0;
				 	// loop through the rows of data
				    while ( have_rows('timeline') ) : the_row();
	    	?>
    		<?php
    			if($cont % 2 == 0):
    		?>
			<div class="col-5 d-none d-md-block"> <!-- inicio linha 1-->
				
			</div>
			<div class="col-2 timeLine">
				<span class="line"></span>
				<span class="dot"></span>
			</div>
			<div class="col-10 col-md-5">
				<div class="timeLineBox">
					<p><b><?php the_sub_field('data'); ?></b></p>
					<p><?php the_sub_field('pequeno_texto_'); ?></p>
					<a data-fancybox="gallery" href="<?php the_sub_field('foto_realizacao'); ?>">ver foto</a>
				</div>
			</div><!-- fim linha 1-->
			<?php
				else:
			?>
			<div class="col-5 d-none d-md-block"><!-- inicio linha 2-->
				<div class="timeLineBox">
					<p><b><?php the_sub_field('data'); ?></b></p>
					<p><?php the_sub_field('pequeno_texto_'); ?></p>
					<a data-fancybox="gallery" href="<?php the_sub_field('foto_realizacao'); ?>">ver foto</a>
				</div>
			</div>
			<div class="col-2 timeLine">
				<span class="line"></span>
				<span class="dot"></span>
			</div>
			<div class="col-10 col-md-5">
				<div class="timeLineBox d-block d-md-none">
					<p><b><?php the_sub_field('data'); ?></b></p>
					<p><?php the_sub_field('pequeno_texto_'); ?></p>
					<a data-fancybox="gallery" href="<?php the_sub_field('foto_realizacao'); ?>">ver foto</a>
				</div>
			</div><!-- fim linha 2-->
			<?php
				endif;
				$cont++;
			    endwhile;

				else :

				    // no rows found

				endif;

			?>
		</div>
	</div>
</section>

<script type="text/javascript">
	
	$(document).ready(function(){
	});

</script>

<?php
	get_footer();
?>