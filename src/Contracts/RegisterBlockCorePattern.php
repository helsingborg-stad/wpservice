<?php

namespace WpService\Contracts;

interface RegisterBlockCorePattern
{
    /**
 *  Registers the `core/pattern` block on the server.
 *
 * @since 5.9.0
 */
    public function registerBlockCorePattern(): void;
}
