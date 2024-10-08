<?php

namespace WpService\Contracts;

interface WpGetActiveAndValidPlugins
{
    /**
 * Retrieves an array of active and valid plugin files.
 *
 * While upgrading or installing WordPress, no plugins are returned.
 *
 * The default directory is `wp-content/plugins`. To change the default
 * directory manually, define `WP_PLUGIN_DIR` and `WP_PLUGIN_URL`
 * in `wp-config.php`.
 *
 * @since 3.0.0
 * @access private
 *
 * @return string[] Array of paths to plugin files relative to the plugins directory.
 */
    public function wpGetActiveAndValidPlugins(): array;
}
