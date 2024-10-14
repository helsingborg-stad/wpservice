<?php

namespace WpService\Contracts;

interface RemoveThemeMods
{
/**
 * Removes theme modifications option for the active theme.
 *
 * @since 2.1.0
 */
    public function removeThemeMods(): void;
}
