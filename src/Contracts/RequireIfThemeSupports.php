<?php

namespace WpService\Contracts;

interface RequireIfThemeSupports
{
/**
 * Checks a theme's support for a given feature before loading the functions which implement it.
 *
 * @since 2.9.0
 *
 * @param string $feature The feature being checked. See add_theme_support() for the list
 *                        of possible values.
 * @param string $file    Path to the file.
 * @return bool True if the active theme supports the supplied feature, false otherwise.
 */
    public function requireIfThemeSupports(string $feature, string $file): bool;
}
