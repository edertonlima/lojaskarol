<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<?php /*

<link rel="shortcut icon" href="<?php the_field('favicon', 'option'); ?>" type="image/x-icon" />
<link rel="icon" href="<?php the_field('favicon', 'option'); ?>" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="pt" />
<meta name="rating" content="General" />
<meta name="description" content="<?php echo $descricao; ?>" />
<meta name="keywords" content="" />
<meta name="robots" content="index,follow" />
<meta name="author" content="<?php echo $autor; ?>" />
<meta name="language" content="pt-br" />
<meta name="title" content="<?php echo $titulo; ?>" />

<!-- SOCIAL META -->
<meta itemprop="name" content="<?php echo $titulo; ?>" />
<meta itemprop="description" content="<?php echo $descricao; ?>" />
<meta itemprop="image" content="<?php echo $imagem; ?>" />

<html itemscope itemtype="<?php echo $url; ?>" />
<link rel="image_src" href="<?php echo $imagem; ?>" />
<link rel="canonical" href="<?php echo $url; ?>" />

<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo $titulo; ?>" />
<meta property="og:type" content="article" />
<meta property="og:description" content="<?php echo $descricao; ?>" />
<meta property="og:image" content="<?php echo $imagem; ?>" />
<meta property="og:url" content="<?php echo $url; ?>" />
<meta property="og:site_name" content="<?php echo $titulo_princ; ?>" />
<meta property="fb:admins" content="<?php echo $autor; ?>" />
<meta property="fb:app_id" content="1205127349523474" /> 

<meta name="twitter:card" content="summary" />
<meta name="twitter:url" content="<?php echo $url; ?>" />
<meta name="twitter:title" content="<?php echo $titulo; ?>" />
<meta name="twitter:description" content="<?php echo $descricao; ?>" />
<meta name="twitter:image" content="<?php echo $imagem; ?>" />
<!-- SOCIAL META -->

*/ ?>
<title><?php echo get_bloginfo( 'name' ); ?></title>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" media="screen" />

<script type="text/javascript">
	//jQuery.noConflict();




</script>

<?php wp_head(); ?> 

</head>
<body <?php body_class(); ?>>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v7.0&appId=1806184732950369&autoLogAppEvents=1" nonce="UM77Ire4"></script>

	<header class="header <?php //echo $classHeader; ?>">
		<div class="top-header">
			<div class="container">

				<form action="" class="busca">
					<i class="fas fa-search"></i>
					<input type="search" name="s" placeholder="pesquisar...">
				</form>

				<div class="social">
					<ul>
						<li><a href="https://web.whatsapp.com/send?phone=+5531995292590" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
						<li><a href="https://www.facebook.com/lojakarol/"><i class="fab fa-facebook-f" target="_blank"></i></a></li>
						<li><a href="https://www.instagram.com/lojaskarol/" target="_blank"><i class="fab fa-instagram"></i></a></li>
					</ul>
				</div>

			</div>	
		</div>

		
		<div class="menu-scroll">
			<div class="logo">
				<a href="<?php echo get_home_url(); ?>" title="home">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-cabecalho.jpg" alt="">
				</a>

				<div class="menu-mobile" id="nav-icon2">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>		

			<?php get_template_part( 'nav' ); ?>
		</div>

	</header>