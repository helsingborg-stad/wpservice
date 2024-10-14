<?php

namespace WpService\Contracts;

interface GetRegisteredThemeFeature
{
/**
 * Gets the registration config for a theme feature.
 *
 * @since 5.5.0
 *
 * @global array $_wp_registered_theme_features
 *
 * @param string $feature The feature name. See add_theme_support() for the list
 *                        of possible values.
 * @return array|null The registration args, or null if the feature was not registered.
 */
    public function getRegisteredThemeFeature(string $feature): array|null;
}
