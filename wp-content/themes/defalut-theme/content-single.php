<?php 
	$imagem_array = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' );
	$imagem = $imagem_array[0];

	global $category;
	//$category = wp_get_post_terms( $post->ID, 'category' )[0];
?>


<article class="">
	<div style="background-image: url('<?php if($imagem){ echo $imagem; } ?>');" class="box-image parallax">		
		<div class="content-item">
			<span class="categoria"><?php echo $category->name; ?></span>
			<h2><?php the_title(); ?></h2>
		</div>

	</div>
</article>