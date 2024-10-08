<?php

namespace WpService\Contracts;

interface WpGetActiveNetworkPlugins
{
    /**
 * Returns array of network plugin files to be included in global scope.
 *
 * The default directory is wp-content/plugins. To change the default directory
 * manually, define `WP_PLUGIN_DIR` and `WP_PLUGIN_URL` in `wp-config.php`.
 *
 * @access private
 * @since 3.1.0
 *
 * @return string[] Array of absolute paths to files to include.
 */
    public function wpGetActiveNetworkPlugins(): array;
}
