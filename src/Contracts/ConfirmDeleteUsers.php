<?php

namespace WpService\Contracts;

interface ConfirmDeleteUsers
{
/**
 * @since 3.0.0
 *
 * @param array $users
 * @return bool
 */
    public function confirmDeleteUsers(array $users): bool;
}
