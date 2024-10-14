<?php

namespace WpService\Contracts;

interface PausedPluginsNotice
{
/**
 * Renders an admin notice in case some plugins have been paused due to errors.
 *
 * @since 5.2.0
 *
 * @global string                       $pagenow         The filename of the current screen.
 * @global WP_Paused_Extensions_Storage $_paused_plugins
 */
    public function pausedPluginsNotice(): void;
}
