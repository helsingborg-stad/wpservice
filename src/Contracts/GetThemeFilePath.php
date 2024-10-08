<?php

namespace WpService\Contracts;

interface GetThemeFilePath
{
    /**
 * Retrieves the path of a file in the theme.
 *
 * Searches in the stylesheet directory before the template directory so themes
 * which inherit from a parent theme can just override one file.
 *
 * @since 4.7.0
 *
 * @param string $file Optional. File to search for in the stylesheet directory.
 * @return string The path of the file.
 */
    public function getThemeFilePath(string $file = ''): string;
}
