<?php

namespace WpService\Contracts;

interface WpEnsureEditableRole
{
/**
 * Stop execution if the role can not be assigned by the current user.
 *
 * @since 6.8.0
 *
 * @param string $role Role the user is attempting to assign.
 */
    public function wpEnsureEditableRole(string $role): void;
}
