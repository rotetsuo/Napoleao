<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @author Roberto Tetsuo
 * @package WordPress
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

<?php
	get_footer();
?>
