<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GG_Underscore_TW
 */

$site_logo = get_field('footer_logo', 'options');
$statement_block = get_field('statement_block', 'options');
$social_media = get_field('social_media', 'options');
// $site_logo = get_field('footer_logo', 'options');
// $site_logo = get_field('footer_logo', 'options');
$contact_us = get_field('contact_us', 'options');

?>

<footer id="colophon" class="bg-midnight-500">

	<div class="fluid-container mx-auto pt-24 pb-20">
		<div class="flex flex-col lg:flex-row md:gap-x-28 max-lg:gap-y-20">
			<div class="w-full lg:w-1/4">
				<div class="max-w-56 max-md:mx-auto mb-16">
					<a href="<? echo site_url(); ?>" class="hover:opacity-50  animate relative">
						<img src="<?php echo $site_logo; ?>" alt="" class="w-full  object-contain">
						<?php if (!$site_logo): ?>
							<h1><?php bloginfo('name'); ?></h1>
						<?php endif; ?>
					</a>
				</div>
				<div class="md:max-w-md text-midnight-100 !text-sm !leading-7">
					<?php echo $statement_block; ?>
				</div>
			</div>
			<div class="w-full lg:w-2/4 flex flex-col md:flex-row md:justify-between max-md:gap-y-16 max-md:items-center max-md:text-center">
				<div>
					<h4 class="text-base font-bold text-white mb-6">Services</h4>
					<?php if (has_nav_menu('services-menu')): ?>
						<nav aria-label="<?php esc_attr_e('Services Menu', 'gg-underscore-tw'); ?>">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'services-menu',
									'menu_class' => 'flex flex-col text-white gap-y-6 text-base !font-normal',
									'depth' => 1,
								)
							);
							?>
						</nav>
					<?php endif; ?>
				</div>
				<div class="">
					<h4 class="text-base font-bold text-white mb-6">Company</h4>
					<?php if (has_nav_menu('company-menu')): ?>
						<nav aria-label="<?php esc_attr_e('Footer Menu', 'gg-underscore-tw'); ?>">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'company-menu',
									'menu_class' => 'flex flex-col text-white gap-y-6 text-base !font-normal',
									'depth' => 1,
								)
							);
							?>
						</nav>
					<?php endif; ?>
				</div>
				<div>
					<h4 class="text-base font-bold text-white mb-6">Resources</h4>
					<?php if (has_nav_menu('resources-menu')): ?>
						<nav aria-label="<?php esc_attr_e('Footer Menu', 'gg-underscore-tw'); ?>">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'resources-menu',
									'menu_class' => 'flex flex-col text-white gap-y-6 text-base !font-normal',
									'depth' => 1,
								)
							);
							?>
						</nav>
					<?php endif; ?>
				</div>
			</div>
			<div class="w-full lg:w-1/4">
				<div class="flex flex-col gap-y-4 mb-10">
					<?php
					if ($social_media):
						foreach ($social_media as $social_item):
							$icon_url = $social_item['social_icon'];
							$social_link = $social_item['social_link'];
							?>

							<a href="<?php echo esc_url($social_link['url']); ?>" target="_blank" class="flex items-center !gap-x-2 py-2.5 px-4 border border-midnight-100/20 rounded-md w-max">
								<img src="<?php echo esc_url($icon_url); ?>"> <span class="!text-base text-white"><?php echo $social_link['title'] ?></span>
							</a>

							<?php
						endforeach;
					endif;
					?>

				</div>

				<div class="text-white !text-base footer-contact-wrapper">
					<?php echo $contact_us; ?>
				</div>


			</div>


		</div>



	</div>

	<div class="bg-midnight-pattern bg-midnight-500 pt-10 md:pt-40 pb-10">
		<div class="fluid-container mx-auto flex max-lg:flex-col justify-between max-md:gap-y-6">
			<div class="flex gap-2 text-midnight-100 text-sm max-lg:flex-col max-lg:justify-center">
				Copyright &copy; <?php echo date_i18n('Y'); ?> -
				<?php echo get_bloginfo('name'); ?>. All rights reserved
			</div>

			<span class="text-midnight-100 text-sm">Website by <a target="_blank" class="on-hover text-midnight-100"
					href="https://gilligangroup.com.au">Gilligan Group</a>
			</span>
		</div>

	</div>


</footer><!-- #colophon -->