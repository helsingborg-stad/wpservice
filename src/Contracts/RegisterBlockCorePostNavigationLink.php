<?php

namespace WpService\Contracts;

interface RegisterBlockCorePostNavigationLink
{
    /**
 * Registers the `core/post-navigation-link` block on the server.
 *
 * @since 5.9.0
 */
    public function registerBlockCorePostNavigationLink(): void;
}
