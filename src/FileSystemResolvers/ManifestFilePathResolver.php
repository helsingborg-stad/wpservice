<?php

namespace WpService\FileSystemResolvers;

use WpService\Contracts\PluginDirPath;
use WpService\FileSystem\FileExists;
use WpService\FileSystem\GetFileContent;
use Exception;

/**
 * Class ManifestFilePathResolver
 * @package WpService\FileSystemResolvers
 */
class ManifestFilePathResolver implements FilePathResolverInterface
{
    /**
     * ManifestFilePathResolver constructor.
     *
     * @param string $manifestFilePath
     * @param FileExists&GetFileContent $fileSystem
     * @param PluginDirPath $wpService
     * @param FilePathResolverInterface|null $inner
     */
    public function __construct(
        private string $manifestFilePath,
        private FileExists&GetFileContent $fileSystem,
        private PluginDirPath $wpService,
        private ?FilePathResolverInterface $inner = new StrictFilePathResolver(),
    ) {
    }

    /**
     * @inheritDoc
     */
    public function resolve(string $filePath): string
    {
        if ($this->fileSystem->fileExists($this->manifestFilePath)) {
            $manifestPath = $this->getManifestPath($this->manifestFilePath);
            $basePath     = $this->getBasePath();
            $pathDiff     = $this->pathDiff($manifestPath, $basePath);

            $manifestFileContent = $this->fileSystem->getFileContent($this->manifestFilePath);
            $manifest            = json_decode($manifestFileContent, true);

            if ($manifest === null) {
                throw new \Exception(
                    'Manifest file (' . $this->manifestFilePath . ') is not a valid JSON: ' . json_last_error_msg()
                );
            }

            if (isset($manifest[$filePath])) {
                $filePath = $pathDiff . DIRECTORY_SEPARATOR . $manifest[$filePath];
            }
        }

        return $this->inner->resolve($filePath);
    }

    /**
     * Calculate the difference between the manifest file path and the base path.
     *
     * @param string $manifestFilePath The manifest file path.
     * @param string $basePath The base path.
     * @return string The path difference.
     */
    private function pathDiff(string $manifestFilePath, string $basePath): string
    {
        $manifestFilePath = explode('/', $manifestFilePath);
        $basePath         = explode('/', $basePath);
        $diff             = array_diff($manifestFilePath, $basePath);
        return implode('/', $diff);
    }

    /**
     * Get the base path.
     *
     * @return string The base path.
     */
    private function getBasePath(): string
    {
        $callerPlugin = $this->getCallerPlugin();
        return $this->wpService->pluginDirPath($callerPlugin ?? __FILE__);
    }

    /**
     * Get the path of the manifest file.
     *
     * @return string The manifest file path.
     */
    private function getManifestPath(): string
    {
        return dirname($this->manifestFilePath);
    }

    /**
     * Get the file path of the plugin that called the current method.
     *
     * @return string|null The file path of the plugin that called the current method.
     */
    private function getCallerPlugin(): ?string
    {
        $trace = (new Exception())->getTrace();
        foreach ($trace as $item) {
            foreach (['wp-content/plugins', 'wp-content/mu-plugins'] as $pluginDir) {
                if (isset($item['file']) && strpos($item['file'], $pluginDir) !== false) {
                    return $item['file'];
                }
            }
        }
        return null;
    }
}
