<?php 
/**
 * Add the Tailwind Typography classes to TinyMCE.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function gg_underscore_tw_tinymce_add_class( $settings ) {
	$settings['body_class'] = GG_UNDERSCORE_TW_TYPOGRAPHY_CLASSES;
	return $settings;
}
add_filter( 'tiny_mce_before_init', 'gg_underscore_tw_tinymce_add_class' );