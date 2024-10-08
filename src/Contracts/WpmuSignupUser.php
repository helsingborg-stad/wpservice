<?php

namespace WpService\Contracts;

interface WpmuSignupUser
{
    /**
 * Records user signup information for future activation.
 *
 * This function is used when user registration is open but
 * new site registration is not.
 *
 * @since MU (3.0.0)
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $user       The user's requested login name.
 * @param string $userEmail The user's email address.
 * @param array $meta       Optional. Signup meta data. Default empty array.
 */
    public function wpmuSignupUser(string $user, string $userEmail, array $meta = []): void;
}
