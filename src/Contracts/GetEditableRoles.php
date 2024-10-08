<?php

namespace WpService\Contracts;

interface GetEditableRoles
{
    /**
 * Fetch a filtered list of user roles that the current user is
 * allowed to edit.
 *
 * Simple function whose main purpose is to allow filtering of the
 * list of roles in the $wp_roles object so that plugins can remove
 * inappropriate ones depending on the situation or user making edits.
 * Specifically because without filtering anyone with the edit_users
 * capability can edit others to be administrators, even if they are
 * only editors or authors. This filter allows admins to delegate
 * user management.
 *
 * @since 2.8.0
 *
 * @return array[] Array of arrays containing role information.
 */
    public function getEditableRoles(): array;
}
