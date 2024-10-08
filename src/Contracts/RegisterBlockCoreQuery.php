<?php

namespace WpService\Contracts;

interface RegisterBlockCoreQuery
{
    /**
     * Registers the `core/query` block on the server.
     *
     * @since 5.8.0
     */
    public function registerBlockCoreQuery(): void;
}
