<?php

namespace WpService\Contracts;

interface RegisterBlockCoreSiteLogo
{
    /**
     * Registers the `core/site-logo` block on the server.
     *
     * @since 5.8.0
     */
    public function registerBlockCoreSiteLogo(): void;
}
