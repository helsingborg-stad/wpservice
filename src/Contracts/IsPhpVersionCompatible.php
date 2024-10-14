<?php

namespace WpService\Contracts;

interface IsPhpVersionCompatible
{
/**
 * Checks compatibility with the current PHP version.
 *
 * @since 5.2.0
 *
 * @param string $required Minimum required PHP version.
 * @return bool True if required version is compatible or empty, false if not.
 */
    public function isPhpVersionCompatible(string $required): bool;
}
