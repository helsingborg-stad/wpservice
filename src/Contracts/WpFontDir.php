<?php

namespace WpService\Contracts;

interface WpFontDir
{
    /**
 * Returns an array containing the current fonts upload directory's path and URL.
 *
 * @since 6.5.0
 *
 * @param bool $createDir Optional. Whether to check and create the font uploads directory. Default true.
 * @return array {
 *     Array of information about the font upload directory.
 *
 *     @type string       $path    Base directory and subdirectory or full path to the fonts upload directory.
 *     @type string       $url     Base URL and subdirectory or absolute URL to the fonts upload directory.
 *     @type string       $subdir  Subdirectory
 *     @type string       $basedir Path without subdir.
 *     @type string       $baseurl URL path without subdir.
 *     @type string|false $error   False or error message.
 * }
 */
    public function wpFontDir(bool $createDir = true): array;
}
