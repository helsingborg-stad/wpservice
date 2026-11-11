<?php

namespace WpService\Contracts;

interface WpGetAbilityCategories
{
/**
 * Retrieves all registered ability categories.
 *
 * Returns an array of all ability category instances currently registered in the system.
 * Use this for discovery, debugging, or building administrative interfaces.
 *
 * Example:
 *
 *     // Prints information about all available ability categories.
 *     $ability_categories = wp_get_ability_categories();
 *     foreach ( $ability_categories as $ability_category ) {
 *         echo $ability_category->get_label() . ': ' . $ability_category->get_description() . "\n";
 *     }
 *
 * @since 6.9.0
 *
 * @see WP_Ability_Categories_Registry::get_all_registered()
 * @see wp_get_ability_category()
 *
 * @return WP_Ability_Category[] An array of registered ability category instances. Returns an empty array
 *                               if no ability categories are registered or if the registry is unavailable.
 */
    public function wpGetAbilityCategories(): array;
}
