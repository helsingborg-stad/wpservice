<?php

namespace WpService\Contracts;

interface WpGetAbilityCategory
{
/**
 * Retrieves a registered ability category.
 *
 * Returns the ability category instance for inspection or use. The instance provides access
 * to the ability category's configuration and metadata.
 *
 * Example:
 *
 *     // Prints information about a registered ability category.
 *     $ability_category = wp_get_ability_category( 'content-management' );
 *     if ( $ability_category ) {
 *         echo $ability_category->get_label() . ': ' . $ability_category->get_description();
 *     }
 *
 * @since 6.9.0
 *
 * @see WP_Ability_Categories_Registry::get_registered()
 * @see wp_has_ability_category()
 * @see wp_get_ability_categories()
 *
 * @param string $slug The slug of the ability category.
 * @return \WP_Ability_Category|null The ability category instance, or `null` if not registered.
 */
    public function wpGetAbilityCategory(string $slug): \WP_Ability_Category|null;
}
