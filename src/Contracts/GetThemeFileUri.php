<?php

namespace WpService\Contracts;

interface GetThemeFileUri
{
    /**
 * Retrieves the URL of a file in the theme.
 *
 * Searches in the stylesheet directory before the template directory so themes
 * which inherit from a parent theme can just override one file.
 *
 * @since 4.7.0
 *
 * @param string $file Optional. File to search for in the stylesheet directory.
 * @return string The URL of the file.
 */
    public function getThemeFileUri(string $file = ''): string;
}
