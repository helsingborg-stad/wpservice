<?php

namespace WpService\Contracts;

interface WpUnregisterAbilityCategory
{
/**
 * Unregisters an ability category.
 *
 * Removes a previously registered ability category from the global registry. Use this to
 * disable ability categories that are no longer needed.
 *
 * Can be called at any time after the ability category has been registered.
 *
 * Example:
 *
 *     if ( wp_has_ability_category( 'deprecated-category' ) ) {
 *         wp_unregister_ability_category( 'deprecated-category' );
 *     }
 *
 * @since 6.9.0
 *
 * @see WP_Ability_Categories_Registry::unregister()
 * @see wp_register_ability_category()
 *
 * @param string $slug The slug of the ability category to unregister.
 * @return \WP_Ability_Category|null The unregistered ability category instance on success, `null` on failure.
 */
    public function wpUnregisterAbilityCategory(string $slug): \WP_Ability_Category|null;
}
