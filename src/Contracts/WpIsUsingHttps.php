<?php

namespace WpService\Contracts;

interface WpIsUsingHttps
{
/**
 * Checks whether the website is using HTTPS.
 *
 * This is based on whether both the home and site URL are using HTTPS.
 *
 * @since 5.7.0
 * @see wp_is_home_url_using_https()
 * @see wp_is_site_url_using_https()
 *
 * @return bool True if using HTTPS, false otherwise.
 */
    public function wpIsUsingHttps(): bool;
}
