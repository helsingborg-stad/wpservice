<?php

namespace WpService\Contracts;

interface IsUserSpammy
{
    /**
 * Determines whether a user is marked as a spammer, based on user login.
 *
 * @since MU (3.0.0)
 *
 * @param string|\WP_User $user Optional. Defaults to current user. WP_User object,
 *                             or user login name as a string.
 * @return bool
 */
    public function isUserSpammy(string|\WP_User $user): bool;
}
