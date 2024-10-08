<?php

namespace WpService\Contracts;

interface WpGetMuPlugins
{
    /**
 * Retrieves an array of must-use plugin files.
 *
 * The default directory is wp-content/mu-plugins. To change the default
 * directory manually, define `WPMU_PLUGIN_DIR` and `WPMU_PLUGIN_URL`
 * in wp-config.php.
 *
 * @since 3.0.0
 * @access private
 *
 * @return string[] Array of absolute paths of files to include.
 */
    public function wpGetMuPlugins(): array;
}
