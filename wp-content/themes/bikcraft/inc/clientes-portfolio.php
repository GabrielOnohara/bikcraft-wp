<?php $portfolio = get_page_by_title('portfolio') ;?>
<section class="portfolio">
			<div class="container">
				<ul class="portfolio_lista rslides_portfolio">

					<li>
						<div class="grid-8"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/retro.jpg" alt="Bicicleta Retrô"></div>
						<div class="grid-8"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/passeio.jpg" alt="Bicicleta Passeio"></div>
						<div class="grid-16"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/esporte.jpg" alt="Bicicleta Esporte"></div>
					</li>

					<li>
						<div class="grid-8"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/passeio.jpg" alt="Bicicleta Passeio"></div>
						<div class="grid-8"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/retro.jpg" alt="Bicicleta Retrô"></div>
						<div class="grid-16"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/esporte.jpg" alt="Bicicleta Esporte"></div>
					</li>

				</ul>
			</div>	
			<?php if(!is_page('portfolio')){ ; ?>
			<div class="call">
				<p><?php the_field('chamada_portfolio', $portfolio);?></p>
				<a href="/bikcraft-wp/portfolio/" class="btn btn-preto">Portfólio</a>
			</div>
            <?php } ; ?>
</section>