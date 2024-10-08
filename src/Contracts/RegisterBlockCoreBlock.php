<?php

namespace WpService\Contracts;

interface RegisterBlockCoreBlock
{
    /**
     * Registers the `core/block` block.
     *
     * @since 5.3.0
     */
    public function registerBlockCoreBlock(): void;
}
