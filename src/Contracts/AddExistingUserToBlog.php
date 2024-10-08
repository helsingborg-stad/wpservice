<?php

namespace WpService\Contracts;

interface AddExistingUserToBlog
{
    /**
     * Adds a user to a blog based on details from maybe_add_existing_user_to_blog().
     *
     * @since MU (3.0.0)
     *
     * @param array|false $details {
     *     User details. Must at least contain values for the keys listed below.
     *
     * @type int    $user_id The ID of the user being added to the current blog.
     * @type string $role    The role to be assigned to the user.
     * }
     * @return true|\WP_Error|void True on success or a WP_Error object if the user doesn't exist
     *                            or could not be added. Void if $details array was not provided.
     */
    public function addExistingUserToBlog(array|false $details = false): mixed;
}
