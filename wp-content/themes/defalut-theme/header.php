<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="shortcut icon" href="<?php the_field('favicon', 'option'); ?>" type="image/x-icon" />
<link rel="icon" href="<?php the_field('favicon', 'option'); ?>" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="pt" />
<meta name="rating" content="General" />
<meta name="robots" content="index,follow" />
<meta name="author" content="Ederton Lima -- https://www.ederton.com.br" />
<meta name="language" content="pt-br" />
<meta name="title" content="<?php echo get_bloginfo( 'name' ); ?>" />

<title><?php echo get_bloginfo( 'name' ); ?></title>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" media="screen" />

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
						<?php if(get_field('whatsapp','option')){ ?>
							<li><a href="https://web.whatsapp.com/send?phone=<?php the_field('whatsapp','option'); ?>" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
						<?php } ?>

						<?php if(get_field('usuario_facebook','option')){ ?>
							<li><a href="https://www.facebook.com/<?php the_field('usuario_facebook','option'); ?>" target="_blank"><i class="fab fa-facebook-f" target="_blank"></i></a></li>
						<?php } ?>
						
						<?php if(get_field('usuario_instagram','option')){ ?>
							<li><a href="https://www.instagram.com/<?php the_field('usuario_instagram','option'); ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
						<?php } ?>
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