<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

	<section class="body404">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-4 offset-md-4 text-center title404">
					<h1><span>¡</span>UPS<span>!</span></h1>
					<h2>La pagina no se ha encontrada.</h2>
				</div>
				<div class="col-12 col-md-6 offset-md-3 text-center title404">
					<p>Llegaste demasiado temprano para la fiesta o la página que buscas no existe.</p>	
					<a href="<?php echo get_home_url(); ?>">Volver al inicio</a>				
				</div>
			</div>
		</div>
	</section>

<?php
get_footer();
