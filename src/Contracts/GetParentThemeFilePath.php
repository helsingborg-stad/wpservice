<?php

namespace WpService\Contracts;

interface GetParentThemeFilePath
{
    /**
 * Retrieves the path of a file in the parent theme.
 *
 * @since 4.7.0
 *
 * @param string $file Optional. File to return the path for in the template directory.
 * @return string The path of the file.
 */
    public function getParentThemeFilePath(string $file = ''): string;
}
