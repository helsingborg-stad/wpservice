<?php

namespace WpService\Contracts;

interface RegisterBlockCorePostContent
{
    /**
 * Registers the `core/post-content` block on the server.
 *
 * @since 5.8.0
 */
    public function registerBlockCorePostContent(): void;
}
