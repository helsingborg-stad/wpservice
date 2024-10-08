<?php

namespace WpService\Contracts;

interface RegisterBlockCoreShortcode
{
    /**
 * Registers the `core/shortcode` block on server.
 *
 * @since 5.0.0
 */
    public function registerBlockCoreShortcode(): void;
}
