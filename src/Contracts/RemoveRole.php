<?php

namespace WpService\Contracts;

interface RemoveRole
{
/**
 * Removes a role, if it exists.
 *
 * @since 2.0.0
 *
 * @param string $role Role name.
 */
    public function removeRole(string $role): void;
}
