<?php

namespace WpService\Contracts;

interface RegisterBlockCorePostCommentsForm
{
    /**
     * Registers the `core/post-comments-form` block on the server.
     *
     * @since 6.0.0
     */
    public function registerBlockCorePostCommentsForm(): void;
}
