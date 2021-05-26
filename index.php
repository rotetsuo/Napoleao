<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @author Roberto Tetsuo
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
		<section class="bodyBlog">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1>Nuestro Blog</h1>
					</div>
					<?php
						if ( have_posts() ) :
						    while ( have_posts() ) : the_post();
						    	if(has_post_thumbnail()) {
									$imagemDestaque = wp_get_attachment_url( get_post_thumbnail_id());
								} else {
									$imagemDestaque = get_template_directory_uri()."/assets/images/imgPadrao.jpg";
								}
					?>
						<div class="col-12 col-sm-6 col-lg-4 singlePost">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php echo $imagemDestaque; ?>">
								<h2><?php the_title(); ?></h2>
								<p class="normalTag"><?php echo get_the_date('d/m/y'); ?></p>
							</a>
						</div>
					<?php
						    endwhile;
						else :
						    _e( 'Sorry, no posts were found.', 'textdomain' );
						endif;
					?>
				</div>
			</div>
		</section>

<?php
get_footer();
