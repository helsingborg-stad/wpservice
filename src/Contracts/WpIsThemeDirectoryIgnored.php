<?php

namespace WpService\Contracts;

interface WpIsThemeDirectoryIgnored
{
    /**
 * Determines whether a theme directory should be ignored during export.
 *
 * @since 6.0.0
 *
 * @param string $path The path of the file in the theme.
 * @return bool Whether this file is in an ignored directory.
 */
    public function wpIsThemeDirectoryIgnored(string $path): bool;
}
