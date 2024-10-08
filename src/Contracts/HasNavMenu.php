<?php

namespace WpService\Contracts;

interface HasNavMenu
{
    /**
     * Determines whether a registered nav menu location has a menu assigned to it.
     *
     * @since 3.0.0
     *
     * @param string $location Menu location identifier.
     * @return bool Whether location has a menu.
     */
    public function hasNavMenu(string $location): bool;
}
