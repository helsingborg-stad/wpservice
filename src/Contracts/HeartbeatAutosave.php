<?php

namespace WpService\Contracts;

interface HeartbeatAutosave
{
    /**
 * Performs autosave with heartbeat.
 *
 * @since 3.9.0
 *
 * @param array $response The Heartbeat response.
 * @param array $data     The $_POST data sent.
 * @return array The Heartbeat response.
 */
    public function heartbeatAutosave(array $response, array $data): array;
}
