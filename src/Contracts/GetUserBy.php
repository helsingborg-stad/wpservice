<?php

namespace WpService\Contracts;

interface GetUserBy
{
/**
 * Retrieves user info by a given field.
 *
 * @since 2.8.0
 * @since 4.4.0 Added 'ID' as an alias of 'id' for the `$field` parameter.
 *
 * @global WP_User $current_user The current user object which holds the user data.
 *
 * @param string $field The field to retrieve the user with. id | ID | slug | email | login.
 * @param int|string $value A value for $field. A user ID, slug, email address, or login name.
 * @return \WP_User|false WP_User object on success, false on failure.
 */
    public function getUserBy(string $field, int|string $value): \WP_User|false;
}
