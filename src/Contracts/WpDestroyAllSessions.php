<?php

namespace WpService\Contracts;

interface WpDestroyAllSessions
{
    /**
     * Removes all session tokens for the current user from the database.
     *
     * @since 4.0.0
     */
    public function wpDestroyAllSessions(): void;
}
