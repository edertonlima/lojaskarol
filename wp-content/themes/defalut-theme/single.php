<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); 
		$category = wp_get_post_terms( $post->ID, 'category' )[0]; ?>

		<section class="box-section no-padding-top post list-post-destaque">
			<?php get_template_part( 'content-single' ); ?>
		</section>

		<section class="box-section">
			<div class="container">
				<div class="row">

					<div class="col-9 main">
						<div class="conteudo">
							<?php the_content(); ?> 
						</div>

						<?php //var_dump($category);
							$query = array(
									'post_type' => 'post',
									'posts_per_page' => 2,
									'cat' => $category->term_id,
									'post__not_in' => array( $post->ID )
								);
							query_posts( $query );
							if( have_posts() ){ ?>

								<div class="box-section">
									<div class="container">

										<h2 class="mais-post">Veja mais:</h2>

										<?php 
											while ( have_posts() ) : the_post();
												get_template_part( 'content' );
											endwhile; 
											wp_reset_query();
										?>

									</div>
								</div>

							<?php }
						?>
					</div>

					<?php get_template_part( 'sidebar' ); ?>

				</div>
			</div>
		</section>
 
	<?php endwhile; ?>

<?php get_footer(); ?>

<script type="text/javascript">


</script>