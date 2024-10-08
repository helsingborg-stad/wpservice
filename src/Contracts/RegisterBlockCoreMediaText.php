<?php

namespace WpService\Contracts;

interface RegisterBlockCoreMediaText
{
    /**
     * Registers the `core/media-text` block renderer on server.
     *
     * @since 6.6.0
     */
    public function registerBlockCoreMediaText(): void;
}
