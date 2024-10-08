<?php

namespace WpService\Contracts;

interface WpDeleteFile
{
    /**
 * Deletes a file.
 *
 * @since 4.2.0
 *
 * @param string $file The path to the file to delete.
 */
    public function wpDeleteFile(string $file): void;
}
