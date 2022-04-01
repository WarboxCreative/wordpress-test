<?php
/**
 * The navigation template file.
 *
 * @package Warbox
 */

?>

<div class="w-full" id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">
	<div class="container">
		<a class="logo" href="<?php echo esc_url( get_site_url() ); ?>">
			<img src="" alt="" />
		</a>

		<nav>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container_id'   => 'navbarNavDropdown',
					'menu_class'     => 'navbar-nav',
					'fallback_cb'    => '',
					'menu_id'        => 'main-menu',
					'depth'          => 1,
				)
			);
			?>
		</nav>
	</div>
</div>
