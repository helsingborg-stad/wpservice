<?php

namespace WpService\Contracts;

interface WpHasAbility
{
/**
 * Checks if an ability is registered.
 *
 * Use this for conditional logic and feature detection before attempting to
 * retrieve or use an ability.
 *
 * Example:
 *
 *     // Displays different UI based on available abilities.
 *     if ( wp_has_ability( 'premium-plugin/advanced-export' ) ) {
 *         echo 'Export with Premium Features';
 *     } else {
 *         echo 'Basic Export';
 *     }
 *
 * @since 6.9.0
 *
 * @see WP_Abilities_Registry::is_registered()
 * @see wp_get_ability()
 *
 * @param string $name The name of the ability to check, including namespace prefix
 *                     (e.g., 'my-plugin/my-ability').
 * @return bool `true` if the ability is registered, `false` otherwise.
 */
    public function wpHasAbility(string $name): bool;
}
