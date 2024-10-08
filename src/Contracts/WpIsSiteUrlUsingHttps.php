<?php

namespace WpService\Contracts;

interface WpIsSiteUrlUsingHttps
{
    /**
     * Checks whether the current site's URL where WordPress is stored is using HTTPS.
     *
     * This checks the URL where WordPress application files (e.g. wp-blog-header.php or the wp-admin/ folder)
     * are accessible.
     *
     * @since 5.7.0
     * @see site_url()
     *
     * @return bool True if using HTTPS, false otherwise.
     */
    public function wpIsSiteUrlUsingHttps(): bool;
}
