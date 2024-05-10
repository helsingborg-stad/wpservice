<?php

namespace WpService\FileSystemResolvers;

use WpService\Contracts\PluginBasename;
use WpService\Contracts\PluginsUrl;
use Exception;

/**
 * Class UrlFilePathResolver
 *
 * This class resolves file paths based on URLs.
 */
class UrlFilePathResolver implements FilePathResolverInterface
{
    /**
     * UrlFilePathResolver constructor.
     *
     * @param PluginBasename&PluginsUrl $wpService
     */
    public function __construct(private PluginBasename&PluginsUrl $wpService)
    {
    }

    /**
     * @inheritDoc
     */
    public function resolve(string $filePath): string
    {
        return $this->wpService->pluginsUrl(
            $this->getBaseName() . $filePath
        );
    }

    /**
     * Get the base name of the plugin.
     *
     * @return string The base name of the plugin.
     */
    private function getBaseName(): string
    {   
        $callerPlugin = $this->getCallerPlugin();
        $baseName     = $this->wpService->pluginBasename($callerPlugin ?? __FILE__);
        $explodedPath = explode('/', $baseName);

        return rtrim(
            array_shift($explodedPath),
            DIRECTORY_SEPARATOR
        ) . DIRECTORY_SEPARATOR;
    }

    /**
     * Get the file path of the plugin that called the current method.
     * 
     * @return string|null The file path of the plugin that called the current method.
     */
    private function getCallerPlugin(): ?string {
        $trace = (new Exception())->getTrace(); 
        foreach ($trace as $item) {
            foreach(['wp-content/plugins', 'wp-content/mu-plugins'] as $pluginDir) {
                if (isset($item['file']) && strpos($item['file'], $pluginDir) !== false) {
                    return $item['file'];
                }
            }
        }
        return null;
    }
}
