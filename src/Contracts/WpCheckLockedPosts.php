<?php

namespace WpService\Contracts;

interface WpCheckLockedPosts
{
    /**
     * Checks lock status for posts displayed on the Posts screen.
     *
     * @since 3.6.0
     *
     * @param array $response  The Heartbeat response.
     * @param array $data      The $_POST data sent.
     * @param string $screenId The screen ID.
     * @return array The Heartbeat response.
     */
    public function wpCheckLockedPosts(array $response, array $data, string $screenId): array;
}
