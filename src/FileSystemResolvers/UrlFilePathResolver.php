<?php

namespace WpService\FileSystemResolvers;

use WpService\Contracts\PluginBasename;
use WpService\Contracts\PluginsUrl;

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
        $baseName     = $this->wpService->pluginBasename(__FILE__);
        $explodedPath = explode('/', $baseName);

        return rtrim(
            array_shift($explodedPath),
            DIRECTORY_SEPARATOR
        ) . DIRECTORY_SEPARATOR;
    }
}
