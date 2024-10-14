<?php

namespace WpService\Contracts;

interface WpDeleteFileFromDirectory
{
/**
 * Deletes a file if its path is within the given directory.
 *
 * @since 4.9.7
 *
 * @param string $file      Absolute path to the file to delete.
 * @param string $directory Absolute path to a directory.
 * @return bool True on success, false on failure.
 */
    public function wpDeleteFileFromDirectory(string $file, string $directory): bool;
}
