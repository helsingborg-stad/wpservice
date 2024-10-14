<?php

namespace WpService\Contracts;

interface GetThemeStarterContent
{
/**
 * Expands a theme's starter content configuration using core-provided data.
 *
 * @since 4.7.0
 *
 * @return array Array of starter content.
 */
    public function getThemeStarterContent(): array;
}
