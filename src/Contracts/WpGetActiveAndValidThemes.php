<?php

namespace WpService\Contracts;

interface WpGetActiveAndValidThemes
{
    /**
 * Retrieves an array of active and valid themes.
 *
 * While upgrading or installing WordPress, no themes are returned.
 *
 * @since 5.1.0
 * @access private
 *
 * @global string $pagenow            The filename of the current screen.
 * @global string $wp_stylesheet_path Path to current theme's stylesheet directory.
 * @global string $wp_template_path   Path to current theme's template directory.
 *
 * @return string[] Array of absolute paths to theme directories.
 */
    public function wpGetActiveAndValidThemes(): array;
}
