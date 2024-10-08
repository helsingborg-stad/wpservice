<?php

namespace WpService\Contracts;

interface RegisterBlockCoreCategories
{
    /**
     * Registers the `core/categories` block on server.
     *
     * @since 5.0.0
     */
    public function registerBlockCoreCategories(): void;
}
