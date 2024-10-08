<?php

namespace WpService\Contracts;

interface WpRedirectAdminLocations
{
    /**
 * Redirects a variety of shorthand URLs to the admin.
 *
 * If a user visits example.com/admin, they'll be redirected to /wp-admin.
 * Visiting /login redirects to /wp-login.php, and so on.
 *
 * @since 3.4.0
 *
 * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
 */
    public function wpRedirectAdminLocations(): void;
}
