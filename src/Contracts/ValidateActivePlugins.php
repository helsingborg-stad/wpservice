<?php

namespace WpService\Contracts;

interface ValidateActivePlugins
{
/**
 * Validates active plugins.
 *
 * Validate all active plugins, deactivates invalid and
 * returns an array of deactivated ones.
 *
 * @since 2.5.0
 * @return WP_Error[] Array of plugin errors keyed by plugin file name.
 */
    public function validateActivePlugins(): array;
}
