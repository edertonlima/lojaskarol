<?php get_header(); ?>

	<?php
		while ( have_posts() ) : the_post();
			$imagem_array = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' );
			$imagem = $imagem_array[0];
	?>

		<section class="box-section no-padding-top post list-post-destaque">
			<article class="">
				<div style="background-image: url('<?php echo $imagem; ?>');" class="box-image parallax">		
					<div class="content-item">
						<h2><?php the_title(); ?></h2>
					</div>

				</div>
			</article>
		</section>

		<section class="box-section">
			<div class="container">
				<div class="row">

					<div class="col-9 main">
						<div class="conteudo">
							<?php the_content(); ?>
						</div>
					</div>

					<?php get_template_part( 'sidebar' ); ?>

				</div>
			</div>
		</section>
 
	<?php endwhile; ?>	

<?php get_footer(); ?>

<script type="text/javascript">


</script>