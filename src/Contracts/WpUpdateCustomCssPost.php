<?php

namespace WpService\Contracts;

interface WpUpdateCustomCssPost
{
    /**
 * Updates the `custom_css` post for a given theme.
 *
 * Inserts a `custom_css` post when one doesn't yet exist.
 *
 * @since 4.7.0
 *
 * @param string $css CSS, stored in `post_content`.
 * @param array $args {
 *     Args.
 *
 *     @type string $preprocessed Optional. Pre-processed CSS, stored in `post_content_filtered`.
 *                                Normally empty string.
 *     @type string $stylesheet   Optional. Stylesheet (child theme) to update.
 *                                Defaults to active theme/stylesheet.
 * }
 * @return \WP_Post|\WP_Error Post on success, error on failure.
 */
    public function wpUpdateCustomCssPost(string $css, array $args): \WP_Post|\WP_Error;
}