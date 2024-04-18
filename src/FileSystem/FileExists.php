<?php

namespace WpService\FileSystem;

interface FileExists
{
    /**
     * Check if a file exists.
     *
     * @param string $path The path to the file.
     * @return bool True if the file exists, false otherwise.
     */
    public function fileExists(string $path): bool;
}
