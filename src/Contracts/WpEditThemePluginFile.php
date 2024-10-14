<?php

namespace WpService\Contracts;

interface WpEditThemePluginFile
{
/**
 * Attempts to edit a file for a theme or plugin.
 *
 * When editing a PHP file, loopback requests will be made to the admin and the homepage
 * to attempt to see if there is a fatal error introduced. If so, the PHP change will be
 * reverted.
 *
 * @since 4.9.0
 *
 * @param string[] $args {
 *     Args. Note that all of the arg values are already unslashed. They are, however,
 *     coming straight from `$_POST` and are not validated or sanitized in any way.
 *
 * @type string $file       Relative path to file.
 * @type string $plugin     Path to the plugin file relative to the plugins directory.
 * @type string $theme      Theme being edited.
 * @type string $newcontent New content for the file.
 * @type string $nonce      Nonce.
 * }
 * @return true|\WP_Error True on success or `WP_Error` on failure.
 */
    public function wpEditThemePluginFile(array $args): true|\WP_Error;
}
