<?php

namespace WpService\Contracts;

interface GetRole
{
    /**
     * Retrieves role object.
     *
     * @since 2.0.0
     *
     * @param string $role Role name.
     * @return \WP_Role|null WP_Role object if found, null if the role does not exist.
     */
    public function getRole(string $role): \WP_Role|null;
}
