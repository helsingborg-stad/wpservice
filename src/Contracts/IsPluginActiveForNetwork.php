<?php

namespace WpService\Contracts;

interface IsPluginActiveForNetwork
{
    /**
 * Determines whether the plugin is active for the entire network.
 *
 * Only plugins installed in the plugins/ folder can be active.
 *
 * Plugins in the mu-plugins/ folder can't be "activated," so this function will
 * return false for those plugins.
 *
 * For more information on this and similar theme functions, check out
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
 * Conditional Tags} article in the Theme Developer Handbook.
 *
 * @since 3.0.0
 *
 * @param string $plugin Path to the plugin file relative to the plugins directory.
 * @return bool True if active for the network, otherwise false.
 */
    public function isPluginActiveForNetwork(string $plugin): bool;
}
