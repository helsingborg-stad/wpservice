<?php

namespace WpService\Contracts;

interface WpUniqueFilename
{
    /**
     * Gets a filename that is sanitized and unique for the given directory.
     *
     * If the filename is not unique, then a number will be added to the filename
     * before the extension, and will continue adding numbers until the filename
     * is unique.
     *
     * The callback function allows the caller to use their own method to create
     * unique file names. If defined, the callback should take three arguments:
     * - directory, base filename, and extension - and return a unique filename.
     *
     * @since 2.5.0
     *
     * @param string $dir                      Directory.
     * @param string $filename                 File name.
     * @param callable $uniqueFilenameCallback Callback. Default null.
     * @return string New filename, if given wasn't unique.
     */
    public function wpUniqueFilename(string $dir, string $filename, callable $uniqueFilenameCallback = null): string;
}
