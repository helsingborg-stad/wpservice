<?php

namespace WpService\Contracts;

interface IsThemePaused
{
    /**
 * Determines whether a theme is technically active but was paused while
 * loading.
 *
 * For more information on this and similar theme functions, check out
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
 * Conditional Tags} article in the Theme Developer Handbook.
 *
 * @since 5.2.0
 *
 * @global WP_Paused_Extensions_Storage $_paused_themes
 *
 * @param string $theme Path to the theme directory relative to the themes directory.
 * @return bool True, if in the list of paused themes. False, not in the list.
 */
    public function isThemePaused(string $theme): bool;
}
