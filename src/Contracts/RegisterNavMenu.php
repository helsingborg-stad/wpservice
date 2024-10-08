<?php

namespace WpService\Contracts;

interface RegisterNavMenu
{
    /**
     * Registers a navigation menu location for a theme.
     *
     * @since 3.0.0
     *
     * @param string $location    Menu location identifier, like a slug.
     * @param string $description Menu location descriptive text.
     */
    public function registerNavMenu(string $location, string $description): void;
}
