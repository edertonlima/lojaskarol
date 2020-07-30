		<?php echo do_shortcode( '[wp_my_instagram username="lojaskarol" limit="24" layout="6" size="large" link=""]' ); ?>

		
		<footer class="footer">
			<div class="container">
				
				<div class="row">
					<div class="col-12">
						<div class="social">
							<ul>
								<li><a href="https://web.whatsapp.com/send?phone=+5531995292590" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
								<li><a href="https://www.facebook.com/lojakarol/"><i class="fab fa-facebook-f" target="_blank"></i></a></li>
								<li><a href="https://www.instagram.com/lojaskarol/" target="_blank"><i class="fab fa-instagram"></i></a></li>
							</ul>
						</div>
						
						<p class="copy">Lojas Karol | Rua Lavras, 90 - São Pedro - Belo Horizonte/MG | CEP: 30140-128 | CNPJ: 17.721.215/0001-02 - Todos os direitos reservados</p>
					</div>
				</div>

			</div>
		</footer>

		<?php wp_footer(); ?>

		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
		
		<!-- CAROUSEL -->
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl-carousel/owl.carousel.min.js"></script>

		<style>
			.wpmi-list {
				display: block;
				margin-top: 40px;
			}
			
			.wpmi-list .owl-item {
				float: left;
			}
			
			.wpmi-list li {
				display: block;
				width: 100%;
			}
			
			.wpmi-list img {
				display: block;
				max-width: 101%;
			}
			
			.owl-stage-outer {
				overflow: hidden;
			}
			
			.owl-nav {
				display: none;
			}
		</style>

		<script type="text/javascript">
			/*$(window).scroll(function(){
				scroll_body = $(window).scrollTop();
				if(scroll_body > 300){
					$('body').addClass('scroll');
				}else{
					$('body').removeClass('scroll');
				}
			});*/


			$(document).ready(function(){
				$('.menu-mobile').click(function(){
					if($('.menu-mobile').hasClass('open')){
						$('.nav').css('right','-100%');
						$('.menu-mobile').removeClass('open');
						$('body').removeClass('open');
					}else{
						$('.nav').css('right','0px');
						$('.menu-mobile').addClass('open');
						$('body').addClass('open');
					}
				});
			});	

			$(window).resize(function(){
				$('.nav').css('right','-100%');
				$('.menu-mobile').removeClass('open');
				$('body').removeClass('open');
			});

			$('.wpmi-list li').removeClass('wpmi-item');
			$('.wpmi-list div').removeClass('wpmi-item');
			$('.wpmi-list').owlCarousel({
				loop:true,
				autoplay:true,
				margin:0,
				responsiveClass:true,
				dots:false,
				nav:false,
				responsive:{
					0:{
						items:2,
						nav:false
					},
					680:{
						items:3,
						nav:false
					},
					900:{
						items:6,
						nav:false
					}
				}
			})
		</script>

	</body>
</html>