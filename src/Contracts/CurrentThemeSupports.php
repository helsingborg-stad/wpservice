<?php

namespace WpService\Contracts;

interface CurrentThemeSupports
{
    /**
     * Checks a theme's support for a given feature.
     *
     * Example usage:
     *
     *     current_theme_supports( 'custom-logo' );
     *     current_theme_supports( 'html5', 'comment-form' );
     *
     * @since 2.9.0
     * @since 5.3.0 Formalized the existing and already documented `...$args` parameter
     *              by adding it to the function signature.
     *
     * @global array $_wp_theme_features
     *
     * @param string $feature The feature being checked. See add_theme_support() for the list
     *                        of possible values.
     * @param mixed  ...$args Optional extra arguments to be checked against certain features.
     * @return bool True if the active theme supports the feature, false otherwise.
     */
    public function currentThemeSupports(string $feature): bool;
}
