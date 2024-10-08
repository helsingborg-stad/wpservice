<?php

namespace WpService\Contracts;

interface WpPluginUpdateRow
{
    /**
 * Displays update information for a plugin.
 *
 * @since 2.3.0
 *
 * @param string $file        Plugin basename.
 * @param array $pluginData Plugin information.
 * @return void|false
 */
    public function wpPluginUpdateRow(string $file, array $pluginData): mixed;
}
