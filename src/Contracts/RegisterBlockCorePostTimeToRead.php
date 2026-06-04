<?php

namespace WpService\Contracts;

interface RegisterBlockCorePostTimeToRead
{
/**
 * Registers the `core/post-time-to-read` block on the server.
 *
 * @since 6.9.0
 */
    public function registerBlockCorePostTimeToRead(): void;
}
