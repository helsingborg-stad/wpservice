<?php

namespace WpService\Contracts;

interface IsWpVersionCompatible
{
/**
 * Checks compatibility with the current WordPress version.
 *
 * @since 5.2.0
 *
 * @global string $_wp_tests_wp_version The WordPress version string. Used only in Core tests.
 *
 * @param string $required Minimum required WordPress version.
 * @return bool True if required version is compatible or empty, false if not.
 */
    public function isWpVersionCompatible(string $required): bool;
}
