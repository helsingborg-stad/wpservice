<?php

namespace WpService\Contracts;

interface RegisterNewUser
{
    /**
 * Handles registering a new user.
 *
 * @since 2.5.0
 *
 * @param string $userLogin User's username for logging in
 * @param string $userEmail User's email address to send password and add
 * @return int|\WP_Error Either user's ID or error on failure.
 */
    public function registerNewUser(string $userLogin, string $userEmail): int|\WP_Error;
}
