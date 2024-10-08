<?php

namespace WpService\Contracts;

interface LoadThemeTextdomain
{
    /**
 * Loads the theme's translated strings.
 *
 * If the current locale exists as a .mo file in the theme's root directory, it
 * will be included in the translated strings by the $domain.
 *
 * The .mo files must be named based on the locale exactly.
 *
 * @since 1.5.0
 * @since 4.6.0 The function now tries to load the .mo file from the languages directory first.
 *
 * @global WP_Textdomain_Registry $wp_textdomain_registry WordPress Textdomain Registry.
 *
 * @param string $domain Text domain. Unique identifier for retrieving translated strings.
 * @param string|false $path   Optional. Path to the directory containing the .mo file.
 *                             Default false.
 * @return bool True when textdomain is successfully loaded, false otherwise.
 */
    public function loadThemeTextdomain(string $domain, string|false $path): bool;
}
