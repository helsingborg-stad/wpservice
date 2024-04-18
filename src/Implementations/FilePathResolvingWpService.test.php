<?php

namespace WpService\Implementations;

use WpService\WpService;
use WpService\FileSystemResolvers\FilePathResolverInterface;
use PHPUnit\Framework\TestCase;

class FilePathResolvingWpServiceTest extends TestCase
{
    /**
     * @testdox registerScript() calls the inner service with the resolved file path
     */
    public function testRegisterScript()
    {
        $innerService     = $this->getInnerService();
        $filePathResolver = $this->getFilePathResolver();

        $filePathResolvingWpService = new FilePathResolvingWpService($innerService, $filePathResolver);
        $filePathResolvingWpService->registerScript('handle', 'path/to/script.js');

        $this->assertEquals('handle', $innerService->invocations['registerScript'][0]);
        $this->assertEquals('resolved: path/to/script.js', $innerService->invocations['registerScript'][1]);
    }

    /**
     * @testdox registerStyle() calls the inner service with the resolved file path
     */
    public function testRegisterStyle()
    {
        $innerService     = $this->getInnerService();
        $filePathResolver = $this->getFilePathResolver();

        $filePathResolvingWpService = new FilePathResolvingWpService($innerService, $filePathResolver);
        $filePathResolvingWpService->registerStyle('handle', 'path/to/stylesheet.css');

        $this->assertEquals('handle', $innerService->invocations['registerStyle'][0]);
        $this->assertEquals('resolved: path/to/stylesheet.css', $innerService->invocations['registerStyle'][1]);
    }

    private function getInnerService(): WpService
    {
        return new class extends NativeWpService {
            public array $invocations = [];

            public function registerStyle(
                string $handle,
                string $src = '',
                array $deps = array(),
                string|bool|null $ver = false,
                string $media = 'all'
            ): void {
                $this->invocations['registerStyle'] = func_get_args();
            }

            public function registerScript(
                string $handle,
                string $src = '',
                array $deps = array(),
                string|bool|null $ver = false,
                bool $in_footer = true
            ): void {
                $this->invocations['registerScript'] = func_get_args();
            }
        };
    }

    private function getFilePathResolver(): FilePathResolverInterface
    {
        return new class implements FilePathResolverInterface {
            public function resolve(string $path): string
            {
                return "resolved: {$path}";
            }
        };
    }
}
