<?php

namespace WpService\Contracts;

interface WpAdminCanonicalUrl
{
    /**
 * Removes single-use URL parameters and create canonical link based on new URL.
 *
 * Removes specific query string parameters from a URL, create the canonical link,
 * put it in the admin header, and change the current URL to match.
 *
 * @since 4.2.0
 */
    public function wpAdminCanonicalUrl(): void;
}
