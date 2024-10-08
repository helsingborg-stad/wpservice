<?php

namespace WpService\Contracts;

interface GetThemeSupport
{
    /**
     * Gets the theme support arguments passed when registering that support.
     *
     * Example usage:
     *
     *     get_theme_support( 'custom-logo' );
     *     get_theme_support( 'custom-header', 'width' );
     *
     * @since 3.1.0
     * @since 5.3.0 Formalized the existing and already documented `...$args` parameter
     *              by adding it to the function signature.
     *
     * @global array $_wp_theme_features
     *
     * @param string $feature The feature to check. See add_theme_support() for the list
     *                        of possible values.
     * @param mixed  ...$args Optional extra arguments to be checked against certain features.
     * @return mixed The array of extra arguments or the value for the registered feature.
     */
    public function getThemeSupport(string $feature): mixed;
}
