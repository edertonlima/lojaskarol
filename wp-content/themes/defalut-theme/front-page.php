<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php 
			$query = array(
					'post_type' => 'post',
					'posts_per_page' => 3
				);
			query_posts( $query );
			if( have_posts() ){ ?>

				<section class="box-section no-padding-top">					
					<div class="post list-post-destaque post-slide owl-carousel owl-theme owl-loaded">
						<div class="owl-stage-outer">
							<div class="owl-stage"> 
					
								<?php 
									while ( have_posts() ) : the_post();
										get_template_part( 'content-destaque' );
									endwhile; 
									wp_reset_query();
								?>

							</div>
						</div>
					</div>
				</section>

			<?php }
		?>


		<?php 
			$query = array(
					'post_type' => 'post',
					'posts_per_page' => 4,
					'offset' => 3
				);
			query_posts( $query );
			if( have_posts() ){ ?>

				<section class="box-section">
					<div class="container">
						<div class="row">

							<div class="col-9 main">

								<?php 
									while ( have_posts() ) : the_post();
										get_template_part( 'content' );
									endwhile; 
									wp_reset_query();
								?>

								<div class="row-load-more">

								</div>

								<button class="carregar-mais load-more" var-url="<?php echo admin_url( 'admin-ajax.php' ); ?>" var-taxonomy="category" var-category="" var-post-type="post" var-paged="2" var-max-paged="<?php echo $wp_query->max_num_pages; ?>" var-not-category="" id="load-more">
									carregar mais
								</button>
							</div>

							<?php get_template_part( 'sidebar' ); ?>

						</div>
					</div>
				</section>

			<?php }
		?>


		<?php /*
		$query = array(
				'post_type' => 'post',
				'posts_per_page' => 3
			);
		query_posts( $query );

		if( have_posts() ){ ?>
			<section class="box-section post list-post">
				<div class="container">

					<div class="row">
						<div class="col-m-1 col-10">

							<h2>Últimos posts</h2>

							<div class="row row-mini flex">
								
								<?php 
								while ( have_posts() ) : the_post();
									get_template_part( 'content' );
								endwhile; 
								wp_reset_query();
								?>

							</div>

						</div>
					</div>

				</div>
			</section>
		<?php } */?>
 
	<?php endwhile; ?>

<?php get_footer(); ?>

<script type="text/javascript">

	$('.post-slide').owlCarousel({
		loop:false,
		margin:0,
		responsiveClass:true,
		dots:false,
		nav:false,
		//navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
		//rtl:true,
		responsive:{
			0:{
				items:1,
				nav:true,
				dots:true
			},
			680:{
				items:2,
				nav:true,
				dots:true
			},
			1000:{
				items:3,
				nav:false,
				loop:false
			}
		}
	})

	post_height = $('.post-slide .item:first-child').width();
	$('.post-slide .item a').height((post_height/4)*3);

	$(window).resize(function(){
		post_height = $('.post-slide .item:first-child').width();
		$('.post-slide .item a').height((post_height/4)*3);
	});

</script>