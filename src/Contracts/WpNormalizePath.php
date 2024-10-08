<?php

namespace WpService\Contracts;

interface WpNormalizePath
{
    /**
 * Normalizes a filesystem path.
 *
 * On windows systems, replaces backslashes with forward slashes
 * and forces upper-case drive letters.
 * Allows for two leading slashes for Windows network shares, but
 * ensures that all other duplicate slashes are reduced to a single.
 *
 * @since 3.9.0
 * @since 4.4.0 Ensures upper-case drive letters on Windows systems.
 * @since 4.5.0 Allows for Windows network shares.
 * @since 4.9.7 Allows for PHP file wrappers.
 *
 * @param string $path Path to normalize.
 * @return string Normalized path.
 */
    public function wpNormalizePath(string $path): string;
}
