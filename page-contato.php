<?php
	/**
	 *	Template name: Página Contato
	 * @package WordPress
	 * @author Roberto Tetsuo
	 * @subpackage Twenty_Twenty_One
	 * @since Twenty Twenty-One 1.0
	 */

	get_header();
	 $imagemDestaque = wp_get_attachment_url( get_post_thumbnail_id());
?>

<section class="bannerTopo d-block d-md-none" style="background-image: url('<?php echo $imagemDestaque; ?>');"></section>
<section class="bodyContato">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-5 d-none d-md-block">
				<img src="<?php the_field('imagem_contato'); ?>">
			</div>
			<div class="col-12 col-md-5 offset-md-1  talkToMe">
				<h1>Converse comigo</h1>
				<div class="sublinhado"></div>
				<form>
					<input type="text" name="name" placeholder="Nome">
					<input type="text" name="email" placeholder="E-mail">
					<input type="textarea" name="mensagem" placeholder="Mensagem">
					<input type="submit" value="Enviar mensagem">
				</form>
			</div>
		</div>
	</div>
</section>


<?php
	get_footer();
?>