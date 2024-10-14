<?php

namespace WpService\Contracts;

interface WpGetThemeFileEditableExtensions
{
/**
 * Gets the list of file extensions that are editable for a given theme.
 *
 * @since 4.9.0
 *
 * @param \WP_Theme $theme Theme object.
 * @return string[] Array of editable file extensions.
 */
    public function wpGetThemeFileEditableExtensions(\WP_Theme $theme): array;
}
