<?php

namespace WpService\Contracts;

interface WpUpdateUrlsToHttps
{
/**
 * Update the 'home' and 'siteurl' option to use the HTTPS variant of their URL.
 *
 * If this update does not result in WordPress recognizing that the site is now using HTTPS (e.g. due to constants
 * overriding the URLs used), the changes will be reverted. In such a case the function will return false.
 *
 * @since 5.7.0
 *
 * @return bool True on success, false on failure.
 */
    public function wpUpdateUrlsToHttps(): bool;
}
