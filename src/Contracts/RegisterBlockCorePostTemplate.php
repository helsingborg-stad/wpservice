<?php

namespace WpService\Contracts;

interface RegisterBlockCorePostTemplate
{
    /**
 * Registers the `core/post-template` block on the server.
 *
 * @since 5.8.0
 */
    public function registerBlockCorePostTemplate(): void;
}
