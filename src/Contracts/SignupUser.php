<?php

namespace WpService\Contracts;

interface SignupUser
{
    /**
 * Shows a form for a visitor to sign up for a new user account.
 *
 * @since MU (3.0.0)
 *
 * @global string $active_signup String that returns registration type. The value can be
 *                               'all', 'none', 'blog', or 'user'.
 *
 * @param string $userName  The username.
 * @param string $userEmail The user's email.
 * @param \WP_Error|string $errors     A WP_Error object containing existing errors. Defaults to empty string.
 */
    public function signupUser(string $userName = '', string $userEmail = '', \WP_Error|string $errors = ''): void;
}
