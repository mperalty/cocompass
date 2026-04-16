<?php
/**
 * CoCompass child theme functions.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'COCOMPASS_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'COCOMPASS_DIR', get_stylesheet_directory() );
define( 'COCOMPASS_URI', get_stylesheet_directory_uri() );

/**
 * Enqueue parent + child styles, and our custom layer.
 */
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style(
		'ollie-style',
		get_template_directory_uri() . '/style.css',
		[],
		wp_get_theme( 'ollie' )->get( 'Version' )
	);

	wp_enqueue_style(
		'cocompass-custom',
		COCOMPASS_URI . '/assets/css/custom.css',
		[ 'ollie-style' ],
		filemtime( COCOMPASS_DIR . '/assets/css/custom.css' )
	);

	wp_enqueue_script(
		'cocompass-scroll-reveal',
		COCOMPASS_URI . '/assets/js/scroll-reveal.js',
		[],
		filemtime( COCOMPASS_DIR . '/assets/js/scroll-reveal.js' ),
		[ 'strategy' => 'defer', 'in_footer' => true ]
	);
}, 20 );

/**
 * Preload critical fonts to improve LCP.
 * Only DM Sans and Fraunces roman — mono is non-critical.
 */
add_action( 'wp_head', function () {
	$fonts = [
		'/assets/fonts/dm-sans/dm-sans-variable.woff2',
		'/assets/fonts/fraunces/fraunces-variable.woff2',
	];
	foreach ( $fonts as $f ) {
		printf(
			'<link rel="preload" href="%s" as="font" type="font/woff2" crossorigin="anonymous">' . "\n",
			esc_url( COCOMPASS_URI . $f )
		);
	}
}, 1 );

/**
 * Register custom pattern category and CTA button style.
 */
add_action( 'init', function () {
	register_block_pattern_category( 'cocompass', [
		'label'       => __( 'CoCompass', 'cocompass' ),
		'description' => __( 'Homepage and marketing patterns for CoCompass.', 'cocompass' ),
	] );

	register_block_style( 'core/button', [
		'name'  => 'cc-cta',
		'label' => __( 'CoCompass CTA', 'cocompass' ),
	] );
} );

/**
 * Performance cleanup.
 */
add_filter( 'should_load_remote_block_patterns', '__return_false' );

add_action( 'init', function () {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
} );
