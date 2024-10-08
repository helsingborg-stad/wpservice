<?php

namespace WpService\Contracts;

interface WpGetAllSessions
{
    /**
 * Retrieves a list of sessions for the current user.
 *
 * @since 4.0.0
 *
 * @return array Array of sessions.
 */
    public function wpGetAllSessions(): array;
}
