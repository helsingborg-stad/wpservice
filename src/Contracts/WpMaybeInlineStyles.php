<?php

namespace WpService\Contracts;

interface WpMaybeInlineStyles
{
    /**
 * Allows small styles to be inlined.
 *
 * This improves performance and sustainability, and is opt-in. Stylesheets can opt in
 * by adding `path` data using `wp_style_add_data`, and defining the file's absolute path:
 *
 *     wp_style_add_data( $style_handle, 'path', $file_path );
 *
 * @since 5.8.0
 *
 * @global WP_Styles $wp_styles
 */
    public function wpMaybeInlineStyles(): void;
}
