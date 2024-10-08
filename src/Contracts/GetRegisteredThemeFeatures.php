<?php

namespace WpService\Contracts;

interface GetRegisteredThemeFeatures
{
    /**
     * Gets the list of registered theme features.
     *
     * @since 5.5.0
     *
     * @global array $_wp_registered_theme_features
     *
     * @return array[] List of theme features, keyed by their name.
     */
    public function getRegisteredThemeFeatures(): array;
}
