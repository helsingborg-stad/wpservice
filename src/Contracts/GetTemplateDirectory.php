<?php

namespace WpService\Contracts;

interface GetTemplateDirectory
{
    /**
 * Retrieves template directory path for the active theme.
 *
 * @since 1.5.0
 * @since 6.4.0 Memoizes filter execution so that it only runs once for the current theme.
 * @since 6.4.1 Memoization removed.
 *
 * @return string Path to active theme's template directory.
 */
    public function getTemplateDirectory(): string;
}
