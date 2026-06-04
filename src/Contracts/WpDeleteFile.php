<?php

namespace WpService\Contracts;

interface WpDeleteFile
{
/**
 * Deletes a file.
 *
 * @since 4.2.0
 * @since 6.7.0 A return value was added.
 *
 * @param string $file The path to the file to delete.
 * @return bool True on success, false on failure.
 */
    public function wpDeleteFile(string $file): bool;
}
