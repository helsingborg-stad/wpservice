<?php

namespace WpService\Contracts;

interface RegisterBlockCoreSiteTitle
{
    /**
     * Registers the `core/site-title` block on the server.
     *
     * @since 5.8.0
     */
    public function registerBlockCoreSiteTitle(): void;
}
