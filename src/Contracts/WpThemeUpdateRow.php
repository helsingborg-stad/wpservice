<?php

namespace WpService\Contracts;

interface WpThemeUpdateRow
{
    /**
 * Displays update information for a theme.
 *
 * @since 3.1.0
 *
 * @param string $themeKey Theme stylesheet.
 * @param \WP_Theme $theme     Theme object.
 * @return void|false
 */
    public function wpThemeUpdateRow(string $themeKey, \WP_Theme $theme): mixed;
}
