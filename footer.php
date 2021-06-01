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
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-3">
					<a href="<?php echo get_home_url(); ?>" class="footerTitle"> 
						Napoleão Bernardes
					</a>
				</div>
				<div class="col-12 offset-md-2 col-md-7 socialFooter">
					<?php
						// check if the repeater field has rows of data
						if( have_rows('redes_socias', 5) ):

						 	// loop through the rows of data
						    while ( have_rows('redes_socias', 5) ) : the_row();
					?>
					<a href="<?php the_sub_field('link_rede_social', 5); ?>" target="_blank">
						<img src="<?php the_sub_field('icone_rede_social', 5) ?>">
					</a>
					<?php 
						 endwhile;

						else :
					    // no rows found
						endif;
					?>
					
				</div>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
