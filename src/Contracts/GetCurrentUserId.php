<?php

namespace WpService\Contracts;

interface GetCurrentUserId
{
/**
 * Gets the current user's ID.
 *
 * @since MU (3.0.0)
 *
 * @return int The current user's ID, or 0 if no user is logged in.
 */
    public function getCurrentUserId(): int;
}
