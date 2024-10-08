<?php

namespace WpService\Contracts;

interface RetrievePassword
{
    /**
 * Handles sending a password retrieval email to a user.
 *
 * @since 2.5.0
 * @since 5.7.0 Added `$user_login` parameter.
 *
 * @global wpdb         $wpdb      WordPress database abstraction object.
 * @global PasswordHash $wp_hasher Portable PHP password hashing framework instance.
 *
 * @param string $userLogin Optional. Username to send a password retrieval email for.
 *                           Defaults to `$_POST['user_login']` if not set.
 * @return true|\WP_Error True when finished, WP_Error object on error.
 */
    public function retrievePassword(string $userLogin): true|\WP_Error;
}
