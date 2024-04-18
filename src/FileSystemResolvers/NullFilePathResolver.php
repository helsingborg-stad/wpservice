<?php

  namespace WpService\FileSystemResolvers;

/**
 * Class NullFilePathResolver
 *
 * @package WpService\FileSystemResolvers
 */
class NullFilePathResolver implements FilePathResolverInterface
{
    /**
     * @inheritDoc
     */
    public function resolve(string $filePath): string
    {
        return $filePath;
    }
}
