<?php

namespace WpService\Contracts;

interface GetParentThemeFileUri
{
    /**
     * Retrieves the URL of a file in the parent theme.
     *
     * @since 4.7.0
     *
     * @param string $file Optional. File to return the URL for in the template directory.
     * @return string The URL of the file.
     */
    public function getParentThemeFileUri(string $file = ''): string;
}
