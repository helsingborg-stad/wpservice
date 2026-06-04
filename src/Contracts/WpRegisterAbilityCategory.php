<?php

namespace WpService\Contracts;

interface WpRegisterAbilityCategory
{
/**
 * Registers a new ability category.
 *
 * Ability categories provide a way to organize and group related abilities for better
 * discoverability and management. Ability categories must be registered before abilities
 * that reference them.
 *
 * Ability categories must be registered on the `wp_abilities_api_categories_init` action hook.
 *
 * Example:
 *
 *     function my_plugin_register_categories() {
 *         wp_register_ability_category(
 *             'content-management',
 *             array(
 *                 'label'       => __( 'Content Management', 'my-plugin' ),
 *                 'description' => __( 'Abilities for managing and organizing content.', 'my-plugin' ),
 *             )
 *         );
 *     }
 *     add_action( 'wp_abilities_api_categories_init', 'my_plugin_register_categories' );
 *
 * @since 6.9.0
 *
 * @see WP_Ability_Categories_Registry::register()
 * @see wp_register_ability()
 * @see wp_unregister_ability_category()
 *
 * @param string $slug The unique slug for the ability category. Must contain only lowercase
 *                                   alphanumeric characters and dashes (e.g., 'data-export').
 * @param array<string, mixed> $args {
 *     An associative array of arguments for the ability category.
 *
 * @type string               $label       Required. The human-readable label for the ability category.
 * @type string               $description Required. A description of what abilities in this category do.
 * @type array<string, mixed> $meta        Optional. Additional metadata for the ability category.
 * }
 * @return \WP_Ability_Category|null The registered ability category instance on success, `null` on failure.
 */
    public function wpRegisterAbilityCategory(string $slug, array $args): \WP_Ability_Category|null;
}
