<?php

namespace WpService\Contracts;

interface WpRefreshPostLock
{
/**
 * Checks lock status on the New/Edit Post screen and refresh the lock.
 *
 * @since 3.6.0
 *
 * @param array $response  The Heartbeat response.
 * @param array $data      The $_POST data sent.
 * @param string $screenId The screen ID.
 * @return array The Heartbeat response.
 */
    public function wpRefreshPostLock(array $response, array $data, string $screenId): array;
}
