<?php

namespace WpService\Contracts;

interface PluginSandboxScrape
{
/**
 * Loads a given plugin attempt to generate errors.
 *
 * @since 3.0.0
 * @since 4.4.0 Function was moved into the `wp-admin/includes/plugin.php` file.
 *
 * @param string $plugin Path to the plugin file relative to the plugins directory.
 */
    public function pluginSandboxScrape(string $plugin): void;
}
