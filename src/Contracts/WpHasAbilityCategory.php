<?php

namespace WpService\Contracts;

interface WpHasAbilityCategory
{
/**
 * Checks if an ability category is registered.
 *
 * Use this for conditional logic and feature detection before attempting to
 * retrieve or use an ability category.
 *
 * Example:
 *
 *     // Displays different UI based on available ability categories.
 *     if ( wp_has_ability_category( 'premium-features' ) ) {
 *         echo 'Premium Features Available';
 *     } else {
 *         echo 'Standard Features';
 *     }
 *
 * @since 6.9.0
 *
 * @see WP_Ability_Categories_Registry::is_registered()
 * @see wp_get_ability_category()
 *
 * @param string $slug The slug of the ability category to check.
 * @return bool `true` if the ability category is registered, `false` otherwise.
 */
    public function wpHasAbilityCategory(string $slug): bool;
}
