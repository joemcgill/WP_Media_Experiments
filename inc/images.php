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

	register_block_type( 'core/media-text', [
		'render_callback' => __NAMESPACE__ . '\\media_text_render_callback',
	] );
}

/**
 * Render callback for the core/image block.
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
 * Render callback for the core/gallery block.
 *
 * @param array $attributes Passed attributes of the image block.
 * @param HTML  $content    The content of the image block.
 *
 * @return HTML rendered content.
 */
function gallery_render_callback( $attributes, $content ) {
	return apply_filters( 'wp_media_experiments/gallery_content', $content );
}

/**
 * Render callback for the core/media-text block.
 *
 * @param array $attributes Passed attributes of the image block.
 * @param HTML  $content    The content of the image block.
 *
 * @return HTML rendered content.
 */
function media_text_render_callback( $attributes, $content ) {
	return apply_filters( 'wp_media_experiments/media_text_content', $content );
}
