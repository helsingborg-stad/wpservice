<?php

namespace WpService\Contracts;

interface WpAdminHeaders
{
/**
 * Sends a referrer policy header so referrers are not sent externally from administration screens.
 *
 * @since 4.9.0
 * @since 6.8.0 This function was moved from `wp-admin/includes/misc.php` to `wp-includes/functions.php`.
 */
    public function wpAdminHeaders(): void;
}
