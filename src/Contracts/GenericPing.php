<?php

namespace WpService\Contracts;

interface GenericPing
{
    /**
     * Sends pings to all of the ping site services.
     *
     * @since 1.2.0
     *
     * @param int $postId Post ID.
     * @return int Same post ID as provided.
     */
    public function genericPing(int $postId = 0): int;
}
