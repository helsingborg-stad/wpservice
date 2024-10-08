<?php

namespace WpService\Contracts;

interface WpRefreshMetaboxLoaderNonces
{
    /**
     * Refresh nonces used with meta boxes in the block editor.
     *
     * @since 6.1.0
     *
     * @param array $response  The Heartbeat response.
     * @param array $data      The $_POST data sent.
     * @return array The Heartbeat response.
     */
    public function wpRefreshMetaboxLoaderNonces(array $response, array $data): array;
}
