<?php

namespace WpService\Contracts;

interface PausedThemesNotice
{
    /**
 * Renders an admin notice in case some themes have been paused due to errors.
 *
 * @since 5.2.0
 *
 * @global string                       $pagenow        The filename of the current screen.
 * @global WP_Paused_Extensions_Storage $_paused_themes
 */
    public function pausedThemesNotice(): void;
}
