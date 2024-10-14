<?php

namespace WpService\Contracts;

interface WpCleanThemesCache
{
/**
 * Clears the cache held by get_theme_roots() and WP_Theme.
 *
 * @since 3.5.0
 * @param bool $clearUpdateCache Whether to clear the theme updates cache.
 */
    public function wpCleanThemesCache(bool $clearUpdateCache = true): void;
}
