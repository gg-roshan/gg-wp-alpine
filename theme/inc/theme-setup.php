<?php 

if ( ! function_exists( 'gg_underscore_tw_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gg_underscore_tw_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on GG Underscore TW, use a find and replace
		 * to change 'gg-underscore-tw' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gg-underscore-tw', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'gg-underscore-tw' ),
				'menu-2' => __( 'Footer Menu', 'gg-underscore-tw' ),
				'services-menu' => __( 'Services Menu', 'gg-underscore-tw' ),
				'company-menu' => __( 'Company Menu', 'gg-underscore-tw' ),
				'resources-menu' => __( 'Resources Menu', 'gg-underscore-tw' ),
				'mobile-menu' => __( 'Mobile Menu', 'gg-underscore-tw' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );
		add_editor_style( 'style-editor-extra.css' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Remove support for block templates.
		remove_theme_support( 'block-templates' );
	}
endif;
add_action( 'after_setup_theme', 'gg_underscore_tw_setup' );

/**
 * Enqueue scripts and styles.
 */
function gg_underscore_tw_scripts() {
	wp_enqueue_style( 'gg-underscore-tw-style', get_stylesheet_uri(), array(), GG_UNDERSCORE_TW_VERSION );
	wp_enqueue_script( 'gg-underscore-tw-script', get_template_directory_uri() . '/js/script.min.js', array(), GG_UNDERSCORE_TW_VERSION, true );

	// Adding Alpine js Support
	wp_enqueue_script('alpine-js', 'https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js', array());

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gg_underscore_tw_scripts' );

/**
 * Enqueue the block editor script.
 */
function gg_underscore_tw_enqueue_block_editor_script() {
	if ( is_admin() ) {
		wp_enqueue_script(
			'gg-underscore-tw-editor',
			get_template_directory_uri() . '/js/block-editor.min.js',
			array(
				'wp-blocks',
				'wp-edit-post',
			),
			GG_UNDERSCORE_TW_VERSION,
			true
		);
		wp_add_inline_script( 'gg-underscore-tw-editor', "tailwindTypographyClasses = '" . esc_attr( GG_UNDERSCORE_TW_TYPOGRAPHY_CLASSES ) . "'.split(' ');", 'before' );
	}
}
add_action( 'enqueue_block_assets', 'gg_underscore_tw_enqueue_block_editor_script' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gg_underscore_tw_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Footer', 'gg-underscore-tw' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'gg-underscore-tw' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'gg_underscore_tw_widgets_init' );

// Initialize ACF Local JSON
function my_acf_json_save_point( $path ) {
    return get_stylesheet_directory() . '/acf-json';
}
add_filter( 'acf/settings/save_json', 'my_acf_json_save_point' );

// Modify filename to match with the component name
// function custom_acf_json_filename( $filename, $post, $load_path ) {
//     $filename = str_replace(
//         array(
//             ' ',
//             '_',
//         ),
//         array(
//             '-',
//             '-'
//         ),
//         $post['title']
//     );

//     $filename = strtolower( $filename ) . '.json';

//     return $filename;
// }
// add_filter( 'acf/json/save_file_name', 'custom_acf_json_filename', 10, 3 );


/***
****
	Creating a Local JSON File name as per the block or field name  
	will create multiple files if we make changes to the Field Name and 
	Can revert if we change to the old name but create the new file
****
*/



// Adding Custom Loading Point for ACF
function my_acf_json_load_point( $paths ) {
    // Remove the original path (optional).
    unset($paths[0]);

    // Append the new path and return it.
    $paths[] = get_stylesheet_directory() . '/acf-json';

    return $paths;    
}
add_filter( 'acf/settings/load_json', 'my_acf_json_load_point' );