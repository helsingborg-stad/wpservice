<?php

namespace WpService\Contracts;

interface IsPluginPaused
{
    /**
 * Determines whether a plugin is technically active but was paused while
 * loading.
 *
 * For more information on this and similar theme functions, check out
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
 * Conditional Tags} article in the Theme Developer Handbook.
 *
 * @since 5.2.0
 *
 * @global WP_Paused_Extensions_Storage $_paused_plugins
 *
 * @param string $plugin Path to the plugin file relative to the plugins directory.
 * @return bool True, if in the list of paused plugins. False, if not in the list.
 */
    public function isPluginPaused(string $plugin): bool;
}
