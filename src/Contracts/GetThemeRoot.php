<?php

namespace WpService\Contracts;

interface GetThemeRoot
{
/**
 * Retrieves path to themes directory.
 *
 * Does not have trailing slash.
 *
 * @since 1.5.0
 *
 * @global array $wp_theme_directories
 *
 * @param string $stylesheetOrTemplate Optional. The stylesheet or template name of the theme.
 *                                       Default is to leverage the main theme root.
 * @return string Themes directory path.
 */
    public function getThemeRoot(string $stylesheetOrTemplate = ''): string;
}
