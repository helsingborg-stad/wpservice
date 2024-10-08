<?php

namespace WpService\Contracts;

interface RegisterBlockCorePageListItem
{
    /**
     * Registers the `core/page-list-item` block on server.
     *
     * @since 6.3.0
     */
    public function registerBlockCorePageListItem(): void;
}
