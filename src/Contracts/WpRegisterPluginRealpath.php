<?php

namespace WpService\Contracts;

interface WpRegisterPluginRealpath
{
    /**
 * Register a plugin's real path.
 *
 * This is used in plugin_basename() to resolve symlinked paths.
 *
 * @since 3.9.0
 *
 * @see wp_normalize_path()
 *
 * @global array $wp_plugin_paths
 *
 * @param string $file Known path to the file.
 * @return bool Whether the path was able to be registered.
 */
    public function wpRegisterPluginRealpath(string $file): bool;
}
