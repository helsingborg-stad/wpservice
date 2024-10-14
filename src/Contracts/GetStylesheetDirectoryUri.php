<?php

namespace WpService\Contracts;

interface GetStylesheetDirectoryUri
{
/**
 * Retrieves stylesheet directory URI for the active theme.
 *
 * @since 1.5.0
 *
 * @return string URI to active theme's stylesheet directory.
 */
    public function getStylesheetDirectoryUri(): string;
}
