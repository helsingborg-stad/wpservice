<?php

namespace WpService\Contracts;

interface SearchThemeDirectories
{
    /**
     * Searches all registered theme directories for complete and valid themes.
     *
     * @since 2.9.0
     *
     * @global array $wp_theme_directories
     *
     * @param bool $force Optional. Whether to force a new directory scan. Default false.
     * @return array|false Valid themes found on success, false on failure.
     */
    public function searchThemeDirectories(bool $force = false): array|false;
}
