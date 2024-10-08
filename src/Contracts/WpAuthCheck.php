<?php

namespace WpService\Contracts;

interface WpAuthCheck
{
    /**
     * Checks whether a user is still logged in, for the heartbeat.
     *
     * Send a result that shows a log-in box if the user is no longer logged in,
     * or if their cookie is within the grace period.
     *
     * @since 3.6.0
     *
     * @global int $login_grace_period
     *
     * @param array $response  The Heartbeat response.
     * @return array The Heartbeat response with 'wp-auth-check' value set.
     */
    public function wpAuthCheck(array $response): array;
}
