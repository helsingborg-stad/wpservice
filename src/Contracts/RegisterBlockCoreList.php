<?php

namespace WpService\Contracts;

interface RegisterBlockCoreList
{
    /**
 * Registers the `core/list` block on server.
 *
 * @since 6.6.0
 */
    public function registerBlockCoreList(): void;
}
