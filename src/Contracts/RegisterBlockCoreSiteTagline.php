<?php

namespace WpService\Contracts;

interface RegisterBlockCoreSiteTagline
{
    /**
     * Registers the `core/site-tagline` block on the server.
     *
     * @since 5.8.0
     */
    public function registerBlockCoreSiteTagline(): void;
}
