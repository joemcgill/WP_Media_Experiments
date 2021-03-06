<?php
/**
 * Lazy Load functionality
 *
 * @package WP_Media_Experiments
 */

namespace WP_Media_Experiments\LazyLoad;

/**
 * Bootstrap the plugin.
 *
 * @return void
 */
function bootstrap() {
	add_filter( 'wp_media_experiments/image_content', __NAMESPACE__ . '\\add_lazy_loading_attr' );
	add_filter( 'wp_media_experiments/gallery_content', __NAMESPACE__ . '\\add_lazy_loading_attr' );
	add_filter( 'wp_media_experiments/media_text_content', __NAMESPACE__ . '\\add_lazy_loading_attr' );
	add_filter( 'wp_get_attachment_image_attributes', __NAMESPACE__ . '\\add_loading_to_image_attr' );
}

/**
 * Add a lazy loading attribute to WordPress image blocks.
 *
 * @param HTML $content The block content to filter.
 * @return HTML The block content with a 'loading' attribute added to each 'img' element.
 */
function add_lazy_loading_attr( $content ) {
	return str_replace( '<img', '<img loading="lazy"', $content );
}

/**
 * Add lazy loading to dynamically generated images.
 *
 * @param array $attr Attributes for image markup.
 * @return array Array of image attributes with lazy loading added.
 */
function add_loading_to_image_attr( $attr ) {
	$attr[ 'loading' ] = 'lazy';

	return $attr;
}
