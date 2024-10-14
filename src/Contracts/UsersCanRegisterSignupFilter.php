<?php

namespace WpService\Contracts;

interface UsersCanRegisterSignupFilter
{
/**
 * Determines whether users can self-register, based on Network settings.
 *
 * @since MU (3.0.0)
 *
 * @return bool
 */
    public function usersCanRegisterSignupFilter(): bool;
}
