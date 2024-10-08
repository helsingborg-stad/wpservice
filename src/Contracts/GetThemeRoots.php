<?php

namespace WpService\Contracts;

interface GetThemeRoots
{
    /**
     * Retrieves theme roots.
     *
     * @since 2.9.0
     *
     * @global array $wp_theme_directories
     *
     * @return array|string An array of theme roots keyed by template/stylesheet
     *                      or a single theme root if all themes have the same root.
     */
    public function getThemeRoots(): array|string;
}
