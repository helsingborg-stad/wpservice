<?php

namespace WpService\Implementations;

use WpService\WpService;
use WpService\FileSystemResolvers\FilePathResolverInterface;
use PHPUnit\Framework\TestCase;

class FilePathResolvingWpServiceTest extends TestCase
{
    /**
     * @testdox wpRegisterScript() calls the inner service with the resolved file path
     */
    public function testRegisterScript()
    {
        $innerService     = $this->getInnerService();
        $filePathResolver = $this->getFilePathResolver();

        $filePathResolvingWpService = new FilePathResolvingWpService($innerService, $filePathResolver);
        $filePathResolvingWpService->wpRegisterScript('handle', 'path/to/script.js');

        $this->assertEquals('handle', $innerService->invocations['wpRegisterScript'][0]);
        $this->assertEquals('resolved: path/to/script.js', $innerService->invocations['wpRegisterScript'][1]);
    }

    /**
     * @testdox wpRegisterStyle() calls the inner service with the resolved file path
     */
    public function testRegisterStyle()
    {
        $innerService     = $this->getInnerService();
        $filePathResolver = $this->getFilePathResolver();

        $filePathResolvingWpService = new FilePathResolvingWpService($innerService, $filePathResolver);
        $filePathResolvingWpService->wpRegisterStyle('handle', 'path/to/stylesheet.css');

        $this->assertEquals('handle', $innerService->invocations['wpRegisterStyle'][0]);
        $this->assertEquals('resolved: path/to/stylesheet.css', $innerService->invocations['wpRegisterStyle'][1]);
    }

    private function getInnerService(): WpService
    {
        return new class extends NativeWpService {
            public array $invocations = [];

            public function wpRegisterStyle(
                string $handle,
                string|false $src,
                array $deps = array(),
                string|bool|null $ver = false,
                string $media = 'all'
            ): bool {
                $this->invocations['wpRegisterStyle'] = func_get_args();
                return true;
            }

            public function wpRegisterScript(
                string $handle,
                string|false $src,
                array $deps = array(),
                string|bool|null $ver = false,
                array|bool $args = array()
            ): bool {
                $this->invocations['wpRegisterScript'] = func_get_args();
                return true;
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
