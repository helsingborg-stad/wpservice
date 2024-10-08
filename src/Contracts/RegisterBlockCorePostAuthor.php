<?php

namespace WpService\Contracts;

interface RegisterBlockCorePostAuthor
{
    /**
 * Registers the `core/post-author` block on the server.
 *
 * @since 5.9.0
 */
    public function registerBlockCorePostAuthor(): void;
}
