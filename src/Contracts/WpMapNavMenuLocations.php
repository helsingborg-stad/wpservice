<?php

namespace WpService\Contracts;

interface WpMapNavMenuLocations
{
    /**
 * Maps nav menu locations according to assignments in previously active theme.
 *
 * @since 4.9.0
 *
 * @param array $newNavMenuLocations New nav menu locations assignments.
 * @param array $oldNavMenuLocations Old nav menu locations assignments.
 * @return array Nav menus mapped to new nav menu locations.
 */
    public function wpMapNavMenuLocations(array $newNavMenuLocations, array $oldNavMenuLocations): array;
}
