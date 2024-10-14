<?php

namespace WpService\Contracts;

interface WpRefreshPostNonces
{
/**
 * Checks nonce expiration on the New/Edit Post screen and refresh if needed.
 *
 * @since 3.6.0
 *
 * @param array $response  The Heartbeat response.
 * @param array $data      The $_POST data sent.
 * @param string $screenId The screen ID.
 * @return array The Heartbeat response.
 */
    public function wpRefreshPostNonces(array $response, array $data, string $screenId): array;
}
