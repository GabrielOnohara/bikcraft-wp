<?php
get_header();
?>
<style type="text/css">
/*Blog Arquivos*/
.introducao-blog {
	background: #000;
}

.blog-container {
	padding: 40px 0;
}

.blog-post:nth-of-type(odd) {
	background: #FEC63E;
}

.blog-post a {
	font-size: 28px;
	color: #000;
	display: block;
	padding: 20px;
	text-transform: uppercase;
}

.blog-post a:after {
	content: "→";
	text-align: right;
	display: block;
	float: right;
}

.blog-post a:hover {
	color: #FEC63E;
	background: #000;
}

.nav-blog {
	margin-top: 20px;
}

.nav-blog a {
	font-size: 14px;
	text-transform: uppercase;
	color: #FEC63E;
}

.nav-blog a {
	margin-right: 20px;
}

/*Blog Post*/

.introducao-geral {
	background: #000;
	height: 120px !important;
}

.conteudo-geral {
	padding: 40px 0;
}

.conteudo-geral p {
	font-size: 18px;
	line-height: 25px;
}
@media only screen and (max-width: 767px) {
/*Blog Arquivos*/
.introducao-blog {
	background: #000;
}

.blog-container {
	padding: 40px 0;
}

.blog-post:nth-of-type(odd) {
	background: #FEC63E;
}

.blog-post a {
	font-size: 28px;
	color: #000;
	display: block;
	padding: 20px;
	text-transform: uppercase;
}

.blog-post a:after {
	content: "→";
	text-align: right;
	display: block;
	float: right;
}

.blog-post a:hover {
	color: #FEC63E;
	background: #000;
}

.nav-blog {
	margin-top: 20px;
}

.nav-blog a {
	font-size: 14px;
	text-transform: uppercase;
	color: #FEC63E;
}

.nav-blog a {
	margin-right: 20px;
}

/*Blog Post*/

.introducao-geral {
	background: #000;
	height: 120px !important;
}

.conteudo-geral {
	padding: 40px 0;
}

.conteudo-geral p {
	font-size: 18px;
	line-height: 25px;
}
}
</style>
<section class="introducao-interna introducao-blog">
	<div class="container">
		<h1>Blog</h1>
		<p>As principais notícias sobre Bicicletas</p>
	</div>
</section>

<div class="container blog-container">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<article class="grid-16 blog-post">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
	</article>

<?php endwhile; ?>

	<div class="nav-blog grid-16">
		<?php next_posts_link( '← Posts Antigos' ); ?>
		<?php previous_posts_link( 'Posts Novos →' ); ?>
	</div>

<?php else: endif; ?>

</div>



<?php get_footer(); ?>