<?php

namespace WpService\Contracts;

interface GetRegisteredSettings
{
    /**
     * Retrieves an array of registered settings.
     *
     * @since 4.7.0
     *
     * @global array $wp_registered_settings
     *
     * @return array List of registered settings, keyed by option name.
     */
    public function getRegisteredSettings(): array;
}
