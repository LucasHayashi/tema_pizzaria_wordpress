<?php 
	// Template Name: Home
	get_header(); 
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<style>
	#introducao {
    	background-image: url('<?php echo get_field('background_home');?>');
	}
</style>
<main>
	<section id="introducao">
		<div class="intro-container">
			<div class="info">
				<h1><?php the_field('titulo_introducao');?></h1>
				<p><?php the_field('subtitulo_introducao');?></p>
			</div>
		</div>
	</section>
	<section id="cardapio">
		<h2 class="main-title">Nosso cardápio</h2>

		<?php if( have_rows('categoria') ): while(have_rows('categoria')): the_row(); ?>
		<article>
			<h3 class="item-category"><?php the_sub_field('nome_categoria'); ?></h3>
			<?php if( have_rows('item') ) : while(have_rows('item')): the_row(); ?>
			<div class="item">
				<h4 class="item-title"><?php the_sub_field('item_titulo');?></h4>
				<div class="item-info">
					<div class="item-description">
						<?php the_sub_field('item_descricao');?>
					</div>
					<div class="item-price">
						R$ <?php the_sub_field('item_preco');?>
					</div>
				</div>
			</div>
			<?php endwhile; else: endif; ?>
		</article>
		<?php endwhile; else: endif; ?>
	</section>
	<section id="contato">
		<article class="reservas">
			<h2 class="main-title">Reservas</h2>
			<p>
				<?php the_field('descricao_reservas');?>
			</p>
		</article>
		<article class="contato-info">
			<h2 class="main-title">Contato</h2>
			<address>
				<span class="contact-type">WhatsApp</span><br />
				<a href="tel:<?php the_field('contato_whatsapp');?>">
					<?php the_field('exibicao_whatsapp');?>
				</a>
				<br />
				<span class="contact-type">Facebook</span><br />
				<a href="<?php the_field('contato_facebook');?>">
					<?php the_field('exibicao_facebook');?>
				</a>
				<br />
				<span class="contact-type">Instagram</span><br />
				<a href="<?php the_field('contato_instagram');?>">
					<?php the_field('exibicao_instagram');?>
				</a>
				<br />
				<span class="contact-type">Nossa localização</span><br />
					<?php the_field('contato_localizacao');?>
				<br />
			</address>
		</article>
	</section>
</main>

<?php endwhile; else : ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>