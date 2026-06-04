<?php

namespace WpService\Contracts;

interface RegisterBlockCorePostCommentsCount
{
/**
 * Registers the `core/post-comments-count` block on the server.
 *
 * @since 6.9.0
 */
    public function registerBlockCorePostCommentsCount(): void;
}
