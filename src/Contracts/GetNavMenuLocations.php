<?php

namespace WpService\Contracts;

interface GetNavMenuLocations
{
    /**
     * Retrieves all registered navigation menu locations and the menus assigned to them.
     *
     * @see https://developer.wordpress.org/reference/functions/get_nav_menu_locations/
     *
     * @return int[] Associative array of registered navigation menu IDs keyed by their
     *               location name. If none are registered, an empty array.
     */
    public function getNavMenuLocations(): array;
}