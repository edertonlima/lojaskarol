<?php 
	$imagem_array = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumb' );
	$imagem = $imagem_array[0];
?>
<div class="col-4">
	<a href="<?php the_permalink(); ?>" class="item-post" title="<?php the_title(); ?>">
		<div class="bg-imagem" style="background-image: url('<?php if($imagem){ echo $imagem; } ?>');"></div>
		<span><?php the_title(); ?></span>
	</a>
</div>