<?php

namespace WpService\Contracts;

interface RegisterBlockCorePageList
{
    /**
 * Registers the `core/pages` block on server.
 *
 * @since 5.8.0
 */
    public function registerBlockCorePageList(): void;
}
