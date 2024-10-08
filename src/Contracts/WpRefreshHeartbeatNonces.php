<?php

namespace WpService\Contracts;

interface WpRefreshHeartbeatNonces
{
    /**
     * Adds the latest Heartbeat and REST API nonce to the Heartbeat response.
     *
     * @since 5.0.0
     *
     * @param array $response The Heartbeat response.
     * @return array The Heartbeat response.
     */
    public function wpRefreshHeartbeatNonces(array $response): array;
}
