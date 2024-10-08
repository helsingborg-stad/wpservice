<?php

namespace WpService\Contracts;

interface RemoveThemeSupport
{
    /**
 * Allows a theme to de-register its support of a certain feature
 *
 * Should be called in the theme's functions.php file. Generally would
 * be used for child themes to override support from the parent theme.
 *
 * @since 3.0.0
 *
 * @see add_theme_support()
 *
 * @param string $feature The feature being removed. See add_theme_support() for the list
 *                        of possible values.
 * @return bool|void Whether feature was removed.
 */
    public function removeThemeSupport(string $feature): bool;
}
