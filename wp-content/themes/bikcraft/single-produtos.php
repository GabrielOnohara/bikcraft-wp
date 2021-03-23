<?php
// Template Name: Single Produtos
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<style type="text/css">
.produto_item {
	padding-top:120px;
}
@media only screen and (max-width: 767px) {
.produto_item {
	padding-top:60px;
}
}
</style>
<?php $contato = get_page_by_title('contato') ;?>
		<section class="container produto_item animar-interno">
			<div class="grid-11">
				<img src="<?php the_field('foto_produto1'); ?>" alt="Bikcraft Passeio">
				<h2><?php the_title(); ?></h2>
			</div>
			<div class="grid-5 produto_icone"><img src="<?php the_field('icone_produto'); ?>" alt="Icone <?php the_title(); ?>"></div>
			<div class="grid-8"><img src="<?php the_field('foto_produto2'); ?>" alt="Bikcraft <?php the_title(); ?>"></div>
			<div class="grid-8 produto_info">
				<?php the_content(); ?>
			</div>
		</section>

		<section class="orcamento">
			<div class="container">
				<h2 class="subtitulo">Orçamento</h2>
				<form action="enviar.php" method="post" name="form" class="formphp form grid-8">
					<label for="nome">Nome</label>
					<input id="nome" name="nome" type="text">
					<label for="email">E-mail</label>
					<input id="email" name="email" type="text">
					<label for="telefone">Telefone</label>
					<input id="telefone" name="telefone" type="text">

					<label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
					<input type="text" class="nao-aparece" name="leaveblank">
					<label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
					<input type="text" class="nao-aparece" name="dontchange" value="http://" >

					<label for="mensagem">Especificações</label>
					<textarea name="mensagem" id="mensagem"></textarea>

					<button id="enviar" name="enviar" type="submit" class="btn">Enviar</button>
				</form>
				<?php include(TEMPLATEPATH . '/inc/produtos-orcamento.php'); ?>
			</div>
		</section>
		<?php endwhile; else: endif;?>
		<?php get_footer(); ?>		