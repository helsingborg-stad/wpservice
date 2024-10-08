<?php

namespace WpService\Contracts;

interface RegisterBlockCoreComments
{
    /**
     * Registers the `core/comments` block on the server.
     *
     * @since 6.1.0
     */
    public function registerBlockCoreComments(): void;
}
