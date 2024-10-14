<?php

namespace WpService\Contracts;

interface ValidatePlugin
{
/**
 * Validates the plugin path.
 *
 * Checks that the main plugin file exists and is a valid plugin. See validate_file().
 *
 * @since 2.5.0
 *
 * @param string $plugin Path to the plugin file relative to the plugins directory.
 * @return int|\WP_Error 0 on success, WP_Error on failure.
 */
    public function validatePlugin(string $plugin): int|\WP_Error;
}
