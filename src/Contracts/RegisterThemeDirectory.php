<?php

namespace WpService\Contracts;

interface RegisterThemeDirectory
{
    /**
 * Registers a directory that contains themes.
 *
 * @since 2.9.0
 *
 * @global array $wp_theme_directories
 *
 * @param string $directory Either the full filesystem path to a theme folder
 *                          or a folder within WP_CONTENT_DIR.
 * @return bool True if successfully registered a directory that contains themes,
 *              false if the directory does not exist.
 */
    public function registerThemeDirectory(string $directory): bool;
}
