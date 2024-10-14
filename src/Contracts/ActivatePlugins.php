<?php

namespace WpService\Contracts;

interface ActivatePlugins
{
/**
 * Activates multiple plugins.
 *
 * When WP_Error is returned, it does not mean that one of the plugins had
 * errors. It means that one or more of the plugin file paths were invalid.
 *
 * The execution will be halted as soon as one of the plugins has an error.
 *
 * @since 2.6.0
 *
 * @param string|string[] $plugins      Single plugin or list of plugins to activate.
 * @param string $redirect     Redirect to page after successful activation.
 * @param bool $networkWide Whether to enable the plugin for all sites in the network.
 *                                      Default false.
 * @param bool $silent       Prevent calling activation hooks. Default false.
 * @return true|\WP_Error True when finished or WP_Error if there were errors during a plugin activation.
 */
    public function activatePlugins(string|array $plugins, string $redirect = '', bool $networkWide = false, bool $silent = false): true|\WP_Error;
}
