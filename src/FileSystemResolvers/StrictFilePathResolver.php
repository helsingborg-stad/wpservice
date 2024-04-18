<?php

namespace WpService\FileSystemResolvers;

/**
 * Class StrictFilePathResolver
 *
 * This class resolves strict file paths.
 */
class StrictFilePathResolver implements FilePathResolverInterface
{
    /**
     * Throws an exception when trying to resolve a file path.
     *
     * @param string $filePath The file path to resolve.
     * @return string Empty string.
     */
    public function resolve(string $filePath): string
    {
        throw new \Exception('StrictFilePathResolver:: could not resolve: ' . $filePath);
        return "";
    }
}
