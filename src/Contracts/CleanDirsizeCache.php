<?php

namespace WpService\Contracts;

interface CleanDirsizeCache
{
    /**
 * Cleans directory size cache used by recurse_dirsize().
 *
 * Removes the current directory and all parent directories from the `dirsize_cache` transient.
 *
 * @since 5.6.0
 * @since 5.9.0 Added input validation with a notice for invalid input.
 *
 * @param string $path Full path of a directory or file.
 */
    public function cleanDirsizeCache(string $path): void;
}
