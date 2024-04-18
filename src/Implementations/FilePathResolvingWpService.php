<?php

namespace WpService\Implementations;

use WpService\FileSystemResolvers\FilePathResolverInterface;
use WpService\WpService;

/**
 * Class FilePathResolvingWpService
 *
 * This class is a decorator for the WpService class that resolves file paths using a FilePathResolverInterface.
 */
class FilePathResolvingWpService extends WpServiceDecorator
{
    /**
     * Constructs a new instance of the FilePathResolvingWpService class.
     *
     * @param WpService $inner The inner WpService instance.
     * @param FilePathResolverInterface $filePathResolver The file path resolver instance.
     */
    public function __construct(private WpService $inner, private FilePathResolverInterface $filePathResolver)
    {
        parent::__construct($inner);
    }

    /**
     * @inheritDoc
     */
    public function registerScript(
        string $handle,
        string $src = '',
        array $deps = array(),
        string|bool|null $ver = false,
        bool $in_footer = true
    ): void {
        $src = $this->filePathResolver->resolve($src);
        $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerStyle(
        string $handle,
        string $src = '',
        array $deps = array(),
        string|bool|null $ver = false,
        string $media = 'all'
    ): void {
        $src = $this->filePathResolver->resolve($src);
        $this->inner->{__FUNCTION__}(...func_get_args());
    }
}
