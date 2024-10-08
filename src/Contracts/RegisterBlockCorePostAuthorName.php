<?php

namespace WpService\Contracts;

interface RegisterBlockCorePostAuthorName
{
    /**
     * Registers the `core/post-author-name` block on the server.
     *
     * @since 6.2.0
     */
    public function registerBlockCorePostAuthorName(): void;
}
