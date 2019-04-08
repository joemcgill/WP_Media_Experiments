<?php
/**
 * Plugin Name:     WordPress Media Experiments
 * Plugin URI:      https://github.com/joemcgill/WP_Media_Experiments
 * Description:     A WordPress Plugin for testing experimental media features.
 * Author:          Joe McGill
 * Author URI:      https://joemcgill.net
 * Text Domain:     wp-media-experiments
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         WP_Media_Experiments
 */

namespace WP_Media_Experiments;

require_once __DIR__ . '/inc/images.php';
require_once __DIR__ . '/inc/lazyload.php';

Images\bootstrap();
LazyLoad\bootstrap();
