<?php
/**
 * Main helpers for controlling image functionality.
 *
 * @package WP_Media_Experiments
 */

namespace WP_Media_Experiments\Images;

/**
 * Bootstrap the plugin.
 *
 * @return void
 */
function bootstrap() {
	add_action( 'init', __NAMESPACE__ . '\\register_blocks' );
}

/**
 * Register PHP rendering for the core/image block.
 *
 * @return void
 */
function register_blocks() {
	register_block_type( 'core/image', [
		'render_callback' => __NAMESPACE__ . '\\image_render_callback',
	] );

	register_block_type( 'core/gallery', [
		'render_callback' => __NAMESPACE__ . '\\gallery_render_callback',
	] );
}

/**
 * Global Render Callback for images.
 *
 * @param array $attributes Passed attributes of the image block.
 * @param HTML  $content    The content of the image block.
 *
 * @return HTML rendered content.
 */
function image_render_callback( $attributes, $content ) {
	return apply_filters( 'wp_media_experiments/image_content', $content );
}

/**
 * Global Render Callback for galleries.
 *
 * @param array $attributes Passed attributes of the image block.
 * @param HTML  $content    The content of the image block.
 *
 * @return HTML rendered content.
 */
function gallery_render_callback( $attributes, $content ) {
	return apply_filters( 'wp_media_experiments/gallery_content', $content );
}
