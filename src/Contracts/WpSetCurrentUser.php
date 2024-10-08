<?php

namespace WpService\Contracts;

interface WpSetCurrentUser
{
    /**
     * Changes the current user by ID or name.
     *
     * Set $id to null and specify a name if you do not know a user's ID.
     *
     * Some WordPress functionality is based on the current user and not based on
     * the signed in user. Therefore, it opens the ability to edit and perform
     * actions on users who aren't signed in.
     *
     * @since 2.0.3
     *
     * @global WP_User $current_user The current user object which holds the user data.
     *
     * @param int|null $id   User ID.
     * @param string $name User's username.
     * @return \WP_User Current user User object.
     */
    public function wpSetCurrentUser(int|null $id, string $name): \WP_User;
}
