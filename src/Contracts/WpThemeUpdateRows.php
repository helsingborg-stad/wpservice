<?php

namespace WpService\Contracts;

interface WpThemeUpdateRows
{
/**
 * Adds a callback to display update information for themes with updates available.
 *
 * @since 3.1.0
 */
    public function wpThemeUpdateRows(): void;
}
