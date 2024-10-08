<?php

namespace WpService\Contracts;

interface DefaultPasswordNagEditUser
{
    /**
 * @since 2.8.0
 *
 * @param int $userID
 * @param \WP_User $oldData
 */
    public function defaultPasswordNagEditUser(int $userID, \WP_User $oldData): void;
}
