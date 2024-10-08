<?php

namespace WpService\Contracts;

interface WpGetDefaultUpdateHttpsUrl
{
    /**
 * Gets the default URL to learn more about updating the site to use HTTPS.
 *
 * Do not use this function to retrieve this URL. Instead, use {@see wp_get_update_https_url()} when relying on the URL.
 * This function does not allow modifying the returned URL, and is only used to compare the actually used URL with the
 * default one.
 *
 * @since 5.7.0
 * @access private
 *
 * @return string Default URL to learn more about updating to HTTPS.
 */
    public function wpGetDefaultUpdateHttpsUrl(): string;
}
