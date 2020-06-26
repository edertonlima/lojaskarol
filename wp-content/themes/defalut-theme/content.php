<?php 
	$imagem_array = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
	$imagem = $imagem_array[0];

	$category = wp_get_post_terms( $post->ID, 'category' )[0];
?>

<article class="post list-post">

    <div class="post-image">
        <img src="<?php if($imagem){ echo $imagem; } ?>" alt="<?php the_title(); ?>">
    </div>

    <div class="post-cont">
    	<span class="categoria" title="<?php echo $category->name; ?>">
    		<?php echo $category->name; ?>
    	</span>

        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        	<h3><?php the_title(); ?></h3>
        </a>

        <p>Hoje em dia, a bota de couro Chelsea é uma peça coringa no guarda roupas masculino. Mas você sabia que entre altas e baixas da moda, essa bota de couro em especial permaneceu nos pés...</p>

        <a href="<?php the_permalink(); ?>" class="ver-mais" title="ver mais">ver mais <i class="fas fa-long-arrow-alt-right"></i></a>

        <div class="post-share" style="display: none;">
            <div class="share jssocials"><div class="jssocials-shares"><div class="jssocials-share jssocials-share-facebook"><a href="#" class="jssocials-share-link"><i class="fa fa-facebook jssocials-share-logo"></i></a></div><div class="jssocials-share jssocials-share-twitter"><a href="#" class="jssocials-share-link"><i class="fa fa-twitter jssocials-share-logo"></i></a></div><div class="jssocials-share jssocials-share-email"><a target="_self" href="mailto:?subject=Optimistic%20Blog&amp;body=https%3A%2F%2Foffshorethemes.com%2Fhtml%2Foptimistic-blog%2Fdemo%2Findex-two.php" class="jssocials-share-link"><i class="fa fa-at jssocials-share-logo"></i></a></div><div class="jssocials-share jssocials-share-pinterest"><a href="#" class="jssocials-share-link"><i class="fa fa-pinterest jssocials-share-logo"></i></a></div><div class="jssocials-share jssocials-share-pocket"><a href="#" class="jssocials-share-link"><i class="fa fa-get-pocket jssocials-share-logo"></i></a></div><div class="jssocials-share jssocials-share-googleplus"><a href="#" class="jssocials-share-link"><i class="fa fa-google jssocials-share-logo"></i></a></div><div class="jssocials-share jssocials-share-linkedin"><a href="#" class="jssocials-share-link"><i class="fa fa-linkedin jssocials-share-logo"></i></a></div></div></div>
        </div>
    </div>
    
</article>