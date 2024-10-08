<?php

namespace WpService\Contracts;

interface WpSkipPausedThemes
{
    /**
 * Filters a given list of themes, removing any paused themes from it.
 *
 * @since 5.2.0
 *
 * @global WP_Paused_Extensions_Storage $_paused_themes
 *
 * @param string[] $themes Array of absolute theme directory paths.
 * @return string[] Filtered array of absolute paths to themes, without any paused themes.
 */
    public function wpSkipPausedThemes(array $themes): array;
}
