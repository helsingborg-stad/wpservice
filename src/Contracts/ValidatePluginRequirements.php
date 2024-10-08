<?php

namespace WpService\Contracts;

interface ValidatePluginRequirements
{
    /**
     * Validates the plugin requirements for WordPress version and PHP version.
     *
     * Uses the information from `Requires at least`, `Requires PHP` and `Requires Plugins` headers
     * defined in the plugin's main PHP file.
     *
     * @since 5.2.0
     * @since 5.3.0 Added support for reading the headers from the plugin's
     *              main PHP file, with `readme.txt` as a fallback.
     * @since 5.8.0 Removed support for using `readme.txt` as a fallback.
     * @since 6.5.0 Added support for the 'Requires Plugins' header.
     *
     * @param string $plugin Path to the plugin file relative to the plugins directory.
     * @return true|\WP_Error True if requirements are met, WP_Error on failure.
     */
    public function validatePluginRequirements(string $plugin): true|\WP_Error;
}
