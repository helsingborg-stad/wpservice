<?php

namespace WpService\Contracts;

interface WpCreateUser
{
    /**
 * Provides a simpler way of inserting a user into the database.
 *
 * Creates a new user with just the username, password, and email. For more
 * complex user creation use wp_insert_user() to specify more information.
 *
 * @since 2.0.0
 *
 * @see wp_insert_user() More complete way to create a new user.
 *
 * @param string $username The user's username.
 * @param string $password The user's password.
 * @param string $email    Optional. The user's email. Default empty.
 * @return int|\WP_Error The newly created user's ID or a WP_Error object if the user could not
 *                      be created.
 */
    public function wpCreateUser(string $username, string $password, string $email = ''): int|\WP_Error;
}
