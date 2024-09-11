<?php
/**
 * Template part for displaying the header content **
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GG_Underscore_TW
 */

$site_logo = get_field('header_logo', 'options');
$contact_email = get_field('contact_email', 'options');
$contact_phone = get_field('contact_phone', 'options');


?>
<script>
	function mobileMenu() {
		var element = document.querySelector(".mobile-menu");
		var hamburger_menu = document.querySelector('#nav-icon4')
		element.classList.toggle("active");
		hamburger_menu.classList.toggle('open');
	}
</script>
<?php if (!is_page_template('template-splashpage.php')): ?>
	<header id="masthead" class=" text-white fixed w-full z-50 top-0">
		<div class="max-lg:hidden mx-6 md:mx-20 px-10">
			<div class="flex justify-end py-5">
				<ul class="flex gap-x-8">
					<li><?php echo $contact_email; ?></li>
					<li class="flex items-center gap-x-3">
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M3.21778 6.92444C4.49778 9.44 6.56 11.4933 9.07556 12.7822L11.0311 10.8267C11.2711 10.5867 11.6267 10.5067 11.9378 10.6133C12.9333 10.9422 14.0089 11.12 15.1111 11.12C15.6 11.12 16 11.52 16 12.0089V15.1111C16 15.6 15.6 16 15.1111 16C6.76444 16 0 9.23556 0 0.888889C0 0.4 0.4 0 0.888889 0H4C4.48889 0 4.88889 0.4 4.88889 0.888889C4.88889 2 5.06667 3.06667 5.39556 4.06222C5.49333 4.37333 5.42222 4.72 5.17333 4.96889L3.21778 6.92444Z"
								fill="#E44B55" />
						</svg>
						<span class="text-base"><?php echo $contact_phone; ?></span>

					</li>
				</ul>
			</div>
		</div>
		<div class="relative mx-6 md:mx-20 px-10 py-7 bg-[#032033] rounded-[5px] border border-midnight-100/20 shadow-menu z-[100]">
			<div class="flex justify-between items-center">
				<div class="max-w-[8.375rem]">
					<img src="<?php echo $site_logo; ?>" alt="" class="w-full object-contain">
				</div>


				<div class="flex justify-end items-center gap-x-20 max-lg:hidden">
					<nav id="site-navigation" aria-label="<?php esc_attr_e('Main Navigation', 'gg-underscore-tw'); ?>">
						<button aria-controls="primary-menu" aria-expanded="false"
							class="hidden"><?php esc_html_e('Primary Menu', 'gg-underscore-tw'); ?></button>

						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id' => 'primary-menu',
								'items_wrap' => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
							)
						);
						?>
					</nav><!-- #site-navigation -->
					<a href="" class="ta-primary-btn">contact Us</a>

				</div>

				<div class="lg:hidden self-center inline-block z-50">
					<button onclick="mobileMenu()" class="mobile-icon">

						<div id="nav-icon4">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</button>
				</div>

			</div>

		</div>
		<!-- Mobile menu -->
		<div class="lg:hidden z-40 mobile-menu bg-midnight-500 w-screen relative -top-[11.25rem]">
			<div class="mx-auto container-fluid py-40 px-6">
				<?php
				wp_nav_menu(
					array(
						'container_id' => 'mobile-menu',
						'theme_location' => 'mobile-menu',
						'fallback_cb' => false,
					)
				);
				?>
			</div>

		</div>
	</header><!-- #masthead -->
<?php endif; ?>