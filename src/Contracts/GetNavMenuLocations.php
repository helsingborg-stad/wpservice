<?php

namespace WpService\Contracts;

interface GetNavMenuLocations
{
/**
 * Retrieves all registered navigation menu locations and the menus assigned to them.
 *
 * @since 3.0.0
 *
 * @return int[] Associative array of registered navigation menu IDs keyed by their
 *               location name. If none are registered, an empty array.
 */
    public function getNavMenuLocations(): array;
}
