<?php

namespace WpService\Contracts;

interface WpIsMaintenanceMode
{
    /**
 * Checks if maintenance mode is enabled.
 *
 * Checks for a file in the WordPress root directory named ".maintenance".
 * This file will contain the variable $upgrading, set to the time the file
 * was created. If the file was created less than 10 minutes ago, WordPress
 * is in maintenance mode.
 *
 * @since 5.5.0
 *
 * @global int $upgrading The Unix timestamp marking when upgrading WordPress began.
 *
 * @return bool True if maintenance mode is enabled, false otherwise.
 */
    public function wpIsMaintenanceMode(): bool;
}
