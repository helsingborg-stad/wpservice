<?php

namespace WpService\Contracts;

interface DeletePlugins
{
    /**
 * Removes directory and files of a plugin for a list of plugins.
 *
 * @since 2.6.0
 *
 * @global WP_Filesystem_Base $wp_filesystem WordPress filesystem subclass.
 *
 * @param string[] $plugins    List of plugin paths to delete, relative to the plugins directory.
 * @param string $deprecated Not used.
 * @return bool|null|\WP_Error True on success, false if `$plugins` is empty, `WP_Error` on failure.
 *                            `null` if filesystem credentials are required to proceed.
 */
    public function deletePlugins(array $plugins, string $deprecated): bool|null|\WP_Error;
}
