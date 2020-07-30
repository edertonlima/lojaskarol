<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage theme
 * @since Ederton 1.0
 */

// add thumbnail
add_theme_support( 'post-thumbnails' );

// menu
add_action( 'after_setup_theme', 'register_menu' );
function register_menu() {
	register_nav_menu( 'primary', __( 'Menu', 'header' ) );
}


// PAGINA DE OPÇÕES
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
	  'page_title'  => 'Configurações Gerais',
	  'menu_title'  => 'Configurações Gerais',
	  'menu_slug'   => 'configuracoes',
	  'capability'  => 'edit_posts',
	  'redirect'    => true
	));

	acf_add_options_sub_page(array(
	  'page_title'  => 'Geral',
	  'menu_title'  => 'Geral',
	  'parent_slug' => 'configuracoes',
	));

}




add_action( 'wp_enqueue_scripts', 'meus_scripts', 100 );

function meus_scripts() {
	wp_enqueue_script(
	    'load-more',
	    get_template_directory_uri() . '/assets/js/load-more.js?ver=1.0', //esse é o arquivo .js do seu tema que vai conter todos os scripts (pode ser diferente no seu tema)
	    array( 'jquery' ),
	    null,
	    false
	);
	wp_localize_script(
	    'meus_scripts',
	    'WPaAjax',
	    array(
	        'ajaxurl' => admin_url( 'admin-ajax.php' )
	    )
	);
}

function load_more() {

	$paged = $_POST['paged'];
	$offset = 9;

	//echo $_POST['post-type'];
	//echo $_POST['category'];
	//echo $_POST['taxonomy'];

	/*if(($_POST['post-type'] == 'projetos') AND ($_POST['taxonomy'] == 'categoria_projetos')){
		
		$tax_query = array(
				array(
					'taxonomy' 	=> $_POST['taxonomy'],
					'terms' 	=> $_POST['category'],
					'include_children' => false,
					'operator' => 'IN'
				)
		    );

	}*/

		$query = array(
			'post_type' 		=> 'post',
			'cat' 				=> $_POST['category'],
			'post_status' 		=> 'any',
			's'					=> '',
			//'category__not_in' 	=> array($_POST['not_category']),
			'posts_per_page' 	=> 7,
			//'offset' 			=> $offset,
			'paged' 			=> $paged,
			//'tax_query' => $tax_query
		);

	//var_dump($query);

	//echo '<br>taxonomy = '.$_POST['taxonomy'];
	//echo '<br>category = '.$_POST['category'];

	$loop = new WP_Query( $query );

	if ( $loop->have_posts() ): 
		while ( $loop->have_posts() ): 

			//echo $paged;
			$loop->the_post();
			get_template_part( 'content', '' );
		
		endwhile;

		echo 'max_paged' . $loop->max_num_pages;
	
	else: ?>    
		<div class="col-12 center margin-top-2x"><p>Desculpa, não conseguimos trazer mais conteúdo.</p></div>
	<?php endif;

	wp_reset_postdata(); 

	die();
}
add_action( 'wp_ajax_nopriv_load_more', 'load_more' );
add_action( 'wp_ajax_load_more', 'load_more' );

?>