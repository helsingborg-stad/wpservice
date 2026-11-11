<?php

namespace WpService\Contracts;

interface WpGetAbility
{
/**
 * Retrieves a registered ability.
 *
 * Returns the ability instance for inspection or use. The instance provides access
 * to the ability's configuration, metadata, and execution methods.
 *
 * Example:
 *
 *     // Prints information about a registered ability.
 *     $ability = wp_get_ability( 'my-plugin/export-data' );
 *     if ( $ability ) {
 *         echo $ability->get_label() . ': ' . $ability->get_description();
 *     }
 *
 * @since 6.9.0
 *
 * @see WP_Abilities_Registry::get_registered()
 * @see wp_has_ability()
 *
 * @param string $name The name of the ability, including namespace prefix
 *                     (e.g., 'my-plugin/my-ability').
 * @return \WP_Ability|null The registered ability instance, or `null` if not registered.
 */
    public function wpGetAbility(string $name): \WP_Ability|null;
}
