<?php

namespace WpService\Contracts;

interface WpGetDirectUpdateHttpsUrl
{
/**
 * Gets the URL for directly updating the site to use HTTPS.
 *
 * A URL will only be returned if the `WP_DIRECT_UPDATE_HTTPS_URL` environment variable is specified or
 * by using the {@see 'wp_direct_update_https_url'} filter. This allows hosts to send users directly to
 * the page where they can update their site to use HTTPS.
 *
 * @since 5.7.0
 *
 * @return string URL for directly updating to HTTPS or empty string.
 */
    public function wpGetDirectUpdateHttpsUrl(): string;
}
