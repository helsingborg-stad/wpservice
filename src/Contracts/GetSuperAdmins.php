<?php

namespace WpService\Contracts;

interface GetSuperAdmins
{
    /**
     * Retrieves a list of super admins.
     *
     * @since 3.0.0
     *
     * @global array $super_admins
     *
     * @return string[] List of super admin logins.
     */
    public function getSuperAdmins(): array;
}
