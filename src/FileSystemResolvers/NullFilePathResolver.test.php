<?php

namespace WpService\FileSystemResolvers;

use WpService\FileSystemResolvers\NullFilePathResolver;
use PHPUnit\Framework\TestCase;

class NullFilePathResolverTest extends TestCase
{
    public function testDecorateReturnsSameFilePath()
    {
        $decorator = new NullFilePathResolver();
        $filePath  = '/path/to/file.txt';

        $decoratedFilePath = $decorator->resolve($filePath);

        $this->assertEquals($filePath, $decoratedFilePath);
    }
}
