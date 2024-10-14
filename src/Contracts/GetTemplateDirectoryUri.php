<?php

namespace WpService\Contracts;

interface GetTemplateDirectoryUri
{
/**
 * Retrieves template directory URI for the active theme.
 *
 * @since 1.5.0
 *
 * @return string URI to active theme's template directory.
 */
    public function getTemplateDirectoryUri(): string;
}
