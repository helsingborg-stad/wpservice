<?php

namespace WpService\Contracts;

interface RegisterBlockCoreSearch
{
    /**
     * Registers the `core/search` block on the server.
     *
     * @since 5.2.0
     */
    public function registerBlockCoreSearch(): void;
}
