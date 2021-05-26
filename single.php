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
	if ( have_posts() ) :
    	while ( have_posts() ) : the_post();
    		if(has_post_thumbnail()) {
				$imagemDestaque = wp_get_attachment_url( get_post_thumbnail_id());
			} else {
				$imagemDestaque = get_template_directory_uri()."/assets/images/imgPadrao.jpg";
			}
?>
<section class="headBlog" style="background: url('<?php echo $imagemDestaque; ?>')">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-10 offset-lg-1 text-center blogTitle">
				<h1><?php the_title(); ?></h1>
				<h2>Escrito por: <?php echo get_the_author(); ?> | <?php echo get_the_date('d/m/y'); ?></h2>
			</div>
		</div>
	</div>
</section>
<section class="blogContent">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-10 offset-lg-1">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>
<?php
		endwhile;
	endif;
get_footer();
