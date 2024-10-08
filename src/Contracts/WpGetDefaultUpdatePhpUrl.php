<?php

namespace WpService\Contracts;

interface WpGetDefaultUpdatePhpUrl
{
    /**
 * Gets the default URL to learn more about updating the PHP version the site is running on.
 *
 * Do not use this function to retrieve this URL. Instead, use {@see wp_get_update_php_url()} when relying on the URL.
 * This function does not allow modifying the returned URL, and is only used to compare the actually used URL with the
 * default one.
 *
 * @since 5.1.0
 * @access private
 *
 * @return string Default URL to learn more about updating PHP.
 */
    public function wpGetDefaultUpdatePhpUrl(): string;
}
