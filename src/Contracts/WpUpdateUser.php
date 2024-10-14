<?php

namespace WpService\Contracts;

interface WpUpdateUser
{
/**
 * Updates a user in the database.
 *
 * It is possible to update a user's password by specifying the 'user_pass'
 * value in the $userdata parameter array.
 *
 * If current user's password is being updated, then the cookies will be
 * cleared.
 *
 * @since 2.0.0
 *
 * @see wp_insert_user() For what fields can be set in $userdata.
 *
 * @param array|object|WP_User $userdata An array of user data or a user object of type stdClass or WP_User.
 * @return int|\WP_Error The updated user's ID or a WP_Error object if the user could not be updated.
 */
    public function wpUpdateUser(array|object $userdata): int|\WP_Error;
}
