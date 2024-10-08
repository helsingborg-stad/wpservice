<?php

namespace WpService\Contracts;

interface WpShouldReplaceInsecureHomeUrl
{
    /**
 * Checks whether WordPress should replace old HTTP URLs to the site with their HTTPS counterpart.
 *
 * If a WordPress site had its URL changed from HTTP to HTTPS, by default this will return `true`, causing WordPress to
 * add frontend filters to replace insecure site URLs that may be present in older database content. The
 * {@see 'wp_should_replace_insecure_home_url'} filter can be used to modify that behavior.
 *
 * @since 5.7.0
 *
 * @return bool True if insecure URLs should replaced, false otherwise.
 */
    public function wpShouldReplaceInsecureHomeUrl(): bool;
}
