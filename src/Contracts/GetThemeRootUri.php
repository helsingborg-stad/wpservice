<?php

namespace WpService\Contracts;

interface GetThemeRootUri
{
/**
 * Retrieves URI for themes directory.
 *
 * Does not have trailing slash.
 *
 * @since 1.5.0
 *
 * @global array $wp_theme_directories
 *
 * @param string $stylesheetOrTemplate Optional. The stylesheet or template name of the theme.
 *                                       Default is to leverage the main theme root.
 * @param string $themeRoot             Optional. The theme root for which calculations will be based,
 *                                       preventing the need for a get_raw_theme_root() call. Default empty.
 * @return string Themes directory URI.
 */
    public function getThemeRootUri(string $stylesheetOrTemplate = '', string $themeRoot = ''): string;
}
