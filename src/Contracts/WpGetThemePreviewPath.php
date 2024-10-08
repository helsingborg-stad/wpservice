<?php

namespace WpService\Contracts;

interface WpGetThemePreviewPath
{
    /**
 * Filters the blog option to return the path for the previewed theme.
 *
 * @since 6.3.0
 *
 * @param string $currentStylesheet The current theme's stylesheet or template path.
 * @return string The previewed theme's stylesheet or template path.
 */
    public function wpGetThemePreviewPath(string $currentStylesheet = null): string;
}
