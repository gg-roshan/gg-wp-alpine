<?php

if ( ! defined( 'GG_UNDERSCORE_TW_VERSION' ) ) {
	define( 'GG_UNDERSCORE_TW_VERSION', '0.1.0' );
}

require get_template_directory() . '/inc/theme-typography.php';
require get_template_directory() . '/inc/theme-setup.php';
require get_template_directory() . '/inc/theme-filters.php';

// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

// Functions which enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Calls the file which creates all the custom blocks
require get_template_directory() . '/inc/theme-blocks.php';