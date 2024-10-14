<?php

namespace WpService\Contracts;

interface WpGetThemeError
{
/**
 * Gets the error that was recorded for a paused theme.
 *
 * @since 5.2.0
 *
 * @global WP_Paused_Extensions_Storage $_paused_themes
 *
 * @param string $theme Path to the theme directory relative to the themes
 *                      directory.
 * @return array|false Array of error information as it was returned by
 *                     `error_get_last()`, or false if none was recorded.
 */
    public function wpGetThemeError(string $theme): array|false;
}
