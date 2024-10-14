<?php

namespace WpService\Contracts;

interface GetStylesheetUri
{
/**
 * Retrieves stylesheet URI for the active theme.
 *
 * The stylesheet file name is 'style.css' which is appended to the stylesheet directory URI path.
 * See get_stylesheet_directory_uri().
 *
 * @since 1.5.0
 *
 * @return string URI to active theme's stylesheet.
 */
    public function getStylesheetUri(): string;
}
