<?php

namespace WpService\Contracts;

interface RegisterBlockCoreAvatar
{
    /**
     * Registers the `core/avatar` block on the server.
     *
     * @since 6.0.0
     */
    public function registerBlockCoreAvatar(): void;
}
