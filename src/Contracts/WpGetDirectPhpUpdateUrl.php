<?php

namespace WpService\Contracts;

interface WpGetDirectPhpUpdateUrl
{
    /**
 * Gets the URL for directly updating the PHP version the site is running on.
 *
 * A URL will only be returned if the `WP_DIRECT_UPDATE_PHP_URL` environment variable is specified or
 * by using the {@see 'wp_direct_php_update_url'} filter. This allows hosts to send users directly to
 * the page where they can update PHP to a newer version.
 *
 * @since 5.1.1
 *
 * @return string URL for directly updating PHP or empty string.
 */
    public function wpGetDirectPhpUpdateUrl(): string;
}
