<?php get_header(); ?>

	<?php  
		//$imagem_array = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' );
		//$imagem = $imagem_array[0];

		//$category = get_queried_object();

		//$imagens = get_field('image-category',$category->taxonomy.'_'.$category->term_id);
		//var_dump($imagens);
	?>

		<section class="box-section">
			<div class="container">
				<h2 class="mais-post">Sua pesquisa: <?php echo $_GET['s']; ?></h2>
			</div>
		</section>

		<section class="box-section no-padding-top">
			<div class="container">
				<div class="row">

					<div class="col-9 main">
						<?php while ( have_posts() ) : the_post();

							get_template_part( 'content' );

						endwhile; ?>
					</div>

					<?php get_template_part( 'sidebar' ); ?>

				</div>
			</div>
		</section>
 
	

<?php get_footer(); ?>

<script type="text/javascript">


</script>