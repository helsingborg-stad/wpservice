<?php

namespace WpService\Contracts;

interface WpGetUpdateHttpsUrl
{
/**
 * Gets the URL to learn more about updating the site to use HTTPS.
 *
 * This URL can be overridden by specifying an environment variable `WP_UPDATE_HTTPS_URL` or by using the
 * {@see 'wp_update_https_url'} filter. Providing an empty string is not allowed and will result in the
 * default URL being used. Furthermore the page the URL links to should preferably be localized in the
 * site language.
 *
 * @since 5.7.0
 *
 * @return string URL to learn more about updating to HTTPS.
 */
    public function wpGetUpdateHttpsUrl(): string;
}
