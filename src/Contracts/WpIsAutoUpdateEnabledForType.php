<?php

namespace WpService\Contracts;

interface WpIsAutoUpdateEnabledForType
{
/**
 * Checks whether auto-updates are enabled.
 *
 * @since 5.5.0
 *
 * @param string $type The type of update being checked: Either 'theme' or 'plugin'.
 * @return bool True if auto-updates are enabled for `$type`, false otherwise.
 */
    public function wpIsAutoUpdateEnabledForType(string $type): bool;
}
