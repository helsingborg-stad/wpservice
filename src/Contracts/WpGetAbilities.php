<?php

namespace WpService\Contracts;

interface WpGetAbilities
{
/**
 * Retrieves all registered abilities.
 *
 * Returns an array of all ability instances currently registered in the system.
 * Use this for discovery, debugging, or building administrative interfaces.
 *
 * Example:
 *
 *     // Prints information about all available abilities.
 *     $abilities = wp_get_abilities();
 *     foreach ( $abilities as $ability ) {
 *         echo $ability->get_label() . ': ' . $ability->get_description() . "\n";
 *     }
 *
 * @since 6.9.0
 *
 * @see WP_Abilities_Registry::get_all_registered()
 *
 * @return WP_Ability[] An array of registered WP_Ability instances. Returns an empty
 *                     array if no abilities are registered or if the registry is unavailable.
 */
    public function wpGetAbilities(): array;
}
