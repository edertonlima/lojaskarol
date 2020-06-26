<div class="col-3 sidebar">
			
	<div class="session-sidebar akarol">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-karol.jpg" alt="">
		<div class="content">
			<h4>Lojas Karol</h4>
			<span class="sub-titulo">Conheça a nossa Loja</span>
			<a href="https://www.lojaskarol.com.br" target="_blank" class="ver-mais">ir para a loja <i class="fas fa-long-arrow-alt-right"></i></a>
		</div>
	</div>

	<div class="session-sidebar assuntos">
		<div class="content">
			<h4>Assuntos</h4>
			<ul>

				<?php
					$args = array(
					    'taxonomy'      	=> 'category',
					    'parent'        	=> 0, // get top level categories
					    'orderby'       	=> 'name',
					    'order'         	=> 'ASC',
					    'hide_empty'      	=> false
					);

					$categories = get_categories( $args );
					foreach ( $categories as $category ){ ?>

							<li>
								<a href="<?php echo get_term_link( $category->term_id); ?>" title="<?php echo $category->name; ?>">
									<i class="fas fa-angle-right"></i>
									<span><?php echo $category->name; ?></span>
								</a>
							</li>

					<?php }
				?>

			</ul>
		</div>
	</div>

	<div class="session-sidebar facebook">
		<div class="content">
			<h4>Facebook</h4>
			<span class="sub-titulo">Curta nossa página!</span>

<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Flojakarol%2F&tabs&width=340&height=130&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=false&appId=1806184732950369" width="100%" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>

		</div>
	</div>	
</div>