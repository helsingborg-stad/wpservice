<?php

namespace WpService\Contracts;

interface WpDestroyOtherSessions
{
/**
 * Removes all but the current session token for the current user for the database.
 *
 * @since 4.0.0
 */
    public function wpDestroyOtherSessions(): void;
}
