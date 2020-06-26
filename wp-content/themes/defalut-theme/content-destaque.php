<?php 
	$imagem_array = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
	$imagem = $imagem_array[0];

	$category = wp_get_post_terms( $post->ID, 'category' )[0];
?>


<div class="item owl-item">
	<a href="<?php the_permalink(); ?>" style="background-image: url('<?php if($imagem){ echo $imagem; } ?>');" title="<?php the_title(); ?>">
		
		<div class="content-item">
			<span class="categoria"><?php echo $category->name; ?></span>
			<h2><?php the_title(); ?></h2>
		</div>

	</a>
</div>