<?php

namespace WpService\Contracts;

interface GetRawThemeRoot
{
    /**
     * Gets the raw theme root relative to the content directory with no filters applied.
     *
     * @since 3.1.0
     *
     * @global array $wp_theme_directories
     *
     * @param string $stylesheetOrTemplate The stylesheet or template name of the theme.
     * @param bool $skipCache             Optional. Whether to skip the cache.
     *                                       Defaults to false, meaning the cache is used.
     * @return string Theme root.
     */
    public function getRawThemeRoot(string $stylesheetOrTemplate, bool $skipCache = false): string;
}
