<?php

namespace WpService\Contracts;

interface AddUser
{
    /**
 * Creates a new user from the "Users" form using $_POST information.
 *
 * @since 2.0.0
 *
 * @return int|\WP_Error WP_Error or User ID.
 */
    public function addUser(): int|\WP_Error;
}
