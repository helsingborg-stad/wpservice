<?php

namespace WpService\Contracts;

interface RegisterBlockCoreQueryNoResults
{
    /**
 * Registers the `core/query-no-results` block on the server.
 *
 * @since 6.0.0
 */
    public function registerBlockCoreQueryNoResults(): void;
}
