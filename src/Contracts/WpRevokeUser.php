<?php

namespace WpService\Contracts;

interface WpRevokeUser
{
    /**
     * Remove all capabilities from user.
     *
     * @since 2.1.0
     *
     * @param int $id User ID.
     */
    public function wpRevokeUser(int $id): void;
}
