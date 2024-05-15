<?php

namespace WpService\FileSystem;

interface GetFileContent
{
    /**
     * Get the content of a file.
     *
     * @param string $path The path to the file.
     * @return string|false The content of the file.
     */
    public function getFileContent(string $path): string|false;
}
