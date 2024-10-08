<?php

namespace WpService\Contracts;

interface ThemeUpdateAvailable
{
    /**
     * Check if there is an update for a theme available.
     *
     * Will display link, if there is an update available.
     *
     * @since 2.7.0
     *
     * @see get_theme_update_available()
     *
     * @param \WP_Theme $theme Theme data object.
     */
    public function themeUpdateAvailable(\WP_Theme $theme): void;
}
