<?php

  namespace WpService\FileSystemResolvers;

interface FilePathResolverInterface
{
    /**
     * Resolve the given file path.
     *
     * @param string $filePath The file path to resolve.
     * @return string The resolved file path.
     */
    public function resolve(string $filePath): string;
}
