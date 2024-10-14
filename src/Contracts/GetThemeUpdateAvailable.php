<?php

namespace WpService\Contracts;

interface GetThemeUpdateAvailable
{
/**
 * Retrieves the update link if there is a theme update available.
 *
 * Will return a link if there is an update available.
 *
 * @since 3.8.0
 *
 * @param \WP_Theme $theme WP_Theme object.
 * @return string|false HTML for the update link, or false if invalid info was passed.
 */
    public function getThemeUpdateAvailable(\WP_Theme $theme): string|false;
}
