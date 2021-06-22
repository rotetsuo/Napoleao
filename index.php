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
		
		<section class="topoBlog">
			<?php
 				$args = array(
				    'post_type' => 'post',
				  	'posts_per_page' => 3
				);
				// The Query
				$the_query = new WP_Query( $args );
				 
				// The Loop
				if ( $the_query->have_posts() ) {
				    
				    while ( $the_query->have_posts() ) {
				        $the_query->the_post();
				        $imagemDestaque = wp_get_attachment_url( get_post_thumbnail_id());
				        $excerpt = get_the_excerpt(); 
						$excerpt = substr( $excerpt, 0, 260 ); 
			?>
				<a href="<?php the_permalink(); ?>">
			<div class="bannerNoticia" style="background-image: url('<?php echo $imagemDestaque; ?>')">
					<div class="sombreado"></div>
					<div class="container">
						<div class="row">
							<div class="col-12 col-md-10">
								<h2><?php the_title(); ?></h2>
								<p><?php echo $excerpt; ?></p>
							</div>
						</div>
					</div>
			</div>
				</a>
			<?php
				    }
				} else {
				    // no posts found
				}
				/* Restore original Post Data */
				wp_reset_postdata();
				?>
				
		</section>
		<div class="container-fluid">
			<div class="row action">
				<div id="slick01" class="col-4" style="background-color: #013A81;">
				    <a href="#" data-slide="0"></a>
				</div>
				<div id="slick02" class="col-4">
				    <a href="#" data-slide="1"></a>
				</div>
				<div id="slick03" class="col-4">			
				    <a href="#" data-slide="2"></a>
				</div>
			</div>
 	 	</div>
		<section class="titleBannerNoticia d-none d-md-block">
			<div class="container">
				<div class="row">
					<?php
						$args = array(
						    'post_type' => 'post',
						  	'posts_per_page' => 3
						);
						// The Query
						$the_query = new WP_Query( $args );
						 
						// The Loop
						if ( $the_query->have_posts() ) {
						    
						    while ( $the_query->have_posts() ) {
						        $the_query->the_post();
						        $imagemDestaque = wp_get_attachment_url( get_post_thumbnail_id());
						        $excerpt = get_the_excerpt(); 
								$excerpt = substr( $excerpt, 0, 260 );
					?>
					<div class="col-12 col-md-4">
						<a href="<?php the_permalink(); ?>">
							<h2><?php the_title(); ?></h2>
							<p><?php echo $excerpt; ?></p>
						</a>
					</div>
					<?php
						    }
						} else {
						    // no posts found
						}
						/* Restore original Post Data */
						wp_reset_postdata();
						?>
					<div class="col-12 bottomLine">
					</div>
				</div>
			</div>
		</section>
		<section class="bodyBlog">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-7 col-lg-8">
						<h3>ÚLTIMAS NOTÍCIAS</h3>
						<?php
						$args = array(
						    'post_type' => 'post',
						  	'posts_per_page' => -1
						);
						// The Query
						$the_query = new WP_Query( $args );
						 
						// The Loop
						if ( $the_query->have_posts() ) {
						    $contador = 0;
						    while ( $the_query->have_posts() ) {
						        $the_query->the_post();
						        $imagemDestaque = wp_get_attachment_url( get_post_thumbnail_id());
							if($contador < 3){
								$contador++;
							}else{
								$excerpt = get_the_excerpt(); 
								$excerpt = substr( $excerpt, 0, 260 );

					?>			
						<a href="<?php the_permalink(); ?>" class="eachBlogPost">
							<div class="blogPostInfo">
								<h4><?php the_title(); ?></h4>
								<img class="d-block d-lg-none" src="<?php echo $imagemDestaque; ?>">
								<p><?php echo $excerpt; ?></p>
							</div>
							<img class="d-none d-lg-block"  src="<?php echo $imagemDestaque; ?>">
						</a>
					<?php
							}
						    }
						} else {
						    // no posts found
						}
						/* Restore original Post Data */
						wp_reset_postdata();
						?>
					</div>
					<div class="col-12 col-md-5 col-lg-4">
						<h3>mais lidas</h3>
						
						<?php
					        global $post;
					        $args = array(
					        	'order'	=> 'DESC',
					        	'suppress_filters' => false,
					        	'posts_per_page' => 3,
					        	'orderby' => 'post_views'
					        );
					        $most_viewed = get_posts( $args );
					        foreach( $most_viewed as $post ){ setup_postdata($post);
						?>
						
						<a href="<?php the_permalink(); ?>" class="eachBlogPost">
							<h5><?php the_title(); ?></h5>
						</a>
						
						
						<?php }
					    wp_reset_postdata();
					    ?>
					
					</div>
				</div>
			</div>
		</section>
		<script type="text/javascript">
			
			$(document).ready(function(){
				$('.topoBlog').slick({
					infinite: true,
					dots: false,
					arrows: false,
					autoplay: true,
  					autoplaySpeed: 2000,
					responsive: [
				    {
				      breakpoint: 576,
				      settings: {
				        dots: true
				      }
				    }
				  ]
				});
				 $('.action .col-4').click(function(e) {
					$('.action .col-4').css('background-color', '#A5A5A5');
					$(this).css('background-color', '#013A81');
			   		e.preventDefault();
			   		var slideno = $(this).find('a').data('slide');
			   		$('.topoBlog').slick('slickGoTo', slideno);
				 });
			 	$('.topoBlog').on('afterChange', function(event, slick, currentSlide, nextSlide){
					var currentSlick = $(".slick-current").data('slick-index');
					if(currentSlick == 0){
						$('.action .col-4').css('background-color', '#A5A5A5');
						$('#slick01').css('background-color', '#013A81');
					}else if(currentSlick == 1){
						$('.action .col-4').css('background-color', '#A5A5A5');
						$('#slick02').css('background-color', '#013A81');
					}else{
						$('.action .col-4').css('background-color', '#A5A5A5');
						$('#slick03').css('background-color', '#013A81');
					}
				});
			});
		</script>

<?php
get_footer();
