<?php

namespace WpService\Contracts;

interface ConfirmDeleteUsers
{
    /**
 * @param array $users
 * @return bool
 */
    public function confirmDeleteUsers(array $users): bool;
}
