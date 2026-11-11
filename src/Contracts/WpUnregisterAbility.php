<?php

namespace WpService\Contracts;

interface WpUnregisterAbility
{
/**
 * Unregisters an ability from the Abilities API.
 *
 * Removes a previously registered ability from the global registry. Use this to
 * disable abilities provided by other plugins or when an ability is no longer needed.
 *
 * Can be called at any time after the ability has been registered.
 *
 * Example:
 *
 *     if ( wp_has_ability( 'other-plugin/some-ability' ) ) {
 *         wp_unregister_ability( 'other-plugin/some-ability' );
 *     }
 *
 * @since 6.9.0
 *
 * @see WP_Abilities_Registry::unregister()
 * @see wp_register_ability()
 *
 * @param string $name The name of the ability to unregister, including namespace prefix
 *                     (e.g., 'my-plugin/my-ability').
 * @return \WP_Ability|null The unregistered ability instance on success, `null` on failure.
 */
    public function wpUnregisterAbility(string $name): \WP_Ability|null;
}
