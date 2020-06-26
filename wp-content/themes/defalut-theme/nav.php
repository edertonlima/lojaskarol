<nav class="nav">
	<div class="container">

		<div class="menu-mobile active-open" id="nav-icon2">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>

		<ul>
			<?php 
				$array_menu = wp_get_nav_menu_items('menu');
				$menu = array();
				foreach ($array_menu as $item) {
					if (empty($m->menu_item_parent)) { ?>

						<li>
							<a href="<?php echo $item->url; ?>" title="<?php echo $item->title; ?>"><?php echo $item->title; ?></a>
						</li>

					<?php }
				}
			?>
		</ul>
	</div>
</nav>