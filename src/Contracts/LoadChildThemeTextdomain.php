<?php

namespace WpService\Contracts;

interface LoadChildThemeTextdomain
{
    /**
 * Loads the child theme's translated strings.
 *
 * If the current locale exists as a .mo file in the child theme's
 * root directory, it will be included in the translated strings by the $domain.
 *
 * The .mo files must be named based on the locale exactly.
 *
 * @since 2.9.0
 *
 * @param string $domain Text domain. Unique identifier for retrieving translated strings.
 * @param string|false $path   Optional. Path to the directory containing the .mo file.
 *                             Default false.
 * @return bool True when the theme textdomain is successfully loaded, false otherwise.
 */
    public function loadChildThemeTextdomain(string $domain, string|false $path): bool;
}
