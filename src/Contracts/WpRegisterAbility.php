<?php

namespace WpService\Contracts;

interface WpRegisterAbility
{
/**
 * Registers a new ability using the Abilities API. It requires three steps:
 *
 *  1. Hook into the `wp_abilities_api_init` action.
 *  2. Call `wp_register_ability()` with a namespaced name and configuration.
 *  3. Provide execute and permission callbacks.
 *
 * Example:
 *
 *     function my_plugin_register_abilities(): void {
 *         wp_register_ability(
 *             'my-plugin/analyze-text',
 *             array(
 *                 'label'               => __( 'Analyze Text', 'my-plugin' ),
 *                 'description'         => __( 'Performs sentiment analysis on provided text.', 'my-plugin' ),
 *                 'category'            => 'text-processing',
 *                 'input_schema'        => array(
 *                     'type'        => 'string',
 *                     'description' => __( 'The text to be analyzed.', 'my-plugin' ),
 *                     'minLength'   => 10,
 *                     'required'    => true,
 *                 ),
 *                 'output_schema'       => array(
 *                     'type'        => 'string',
 *                     'enum'        => array( 'positive', 'negative', 'neutral' ),
 *                     'description' => __( 'The sentiment result: positive, negative, or neutral.', 'my-plugin' ),
 *                     'required'    => true,
 *                 ),
 *                 'execute_callback'    => 'my_plugin_analyze_text',
 *                 'permission_callback' => 'my_plugin_can_analyze_text',
 *                 'meta'                => array(
 *                     'annotations'   => array(
 *                         'readonly' => true,
 *                     ),
 *                     'show_in_rest' => true,
 *                 ),
 *             )
 *         );
 *     }
 *     add_action( 'wp_abilities_api_init', 'my_plugin_register_abilities' );
 *
 * ### Naming Conventions
 *
 * Ability names must follow these rules:
 *
 *  - Include a namespace prefix (e.g., `my-plugin/my-ability`).
 *  - Use only lowercase alphanumeric characters, dashes, and forward slashes.
 *  - Use descriptive, action-oriented names (e.g., `process-payment`, `generate-report`).
 *
 * ### Categories
 *
 * Abilities must be organized into categories. Ability categories provide better
 * discoverability and must be registered before the abilities that reference them:
 *
 *     function my_plugin_register_categories(): void {
 *         wp_register_ability_category(
 *             'text-processing',
 *             array(
 *                 'label'       => __( 'Text Processing', 'my-plugin' ),
 *                 'description' => __( 'Abilities for analyzing and transforming text.', 'my-plugin' ),
 *             )
 *         );
 *     }
 *     add_action( 'wp_abilities_api_categories_init', 'my_plugin_register_categories' );
 *
 * ### Input and Output Schemas
 *
 * Schemas define the expected structure, type, and constraints for ability inputs
 * and outputs using JSON Schema syntax. They serve two critical purposes: automatic
 * validation of data passed to and returned from abilities, and self-documenting
 * API contracts for developers.
 *
 * WordPress implements a validator based on a subset of the JSON Schema Version 4
 * specification (https://json-schema.org/specification-links.html#draft-4).
 * For details on supported JSON Schema properties and syntax, see the
 * related WordPress REST API Schema documentation:
 * https://developer.wordpress.org/rest-api/extending-the-rest-api/schema/#json-schema-basics
 *
 * Defining schemas is mandatory when there is a value to pass or return.
 * They ensure data integrity, improve developer experience, and enable
 * better documentation:
 *
 *     'input_schema' => array(
 *         'type'        => 'string',
 *         'description' => __( 'The text to be analyzed.', 'my-plugin' ),
 *         'minLength'   => 10,
 *         'required'    => true,
 *     ),
 *     'output_schema'       => array(
 *         'type'        => 'string',
 *         'enum'        => array( 'positive', 'negative', 'neutral' ),
 *         'description' => __( 'The sentiment result: positive, negative, or neutral.', 'my-plugin' ),
 *         'required'    => true,
 *     ),
 *
 * ### Callbacks
 *
 * #### Execute Callback
 *
 * The execute callback performs the ability's core functionality. It receives
 * optional input data and returns either a result or `WP_Error` on failure.
 *
 *     function my_plugin_analyze_text( string $input ): string|WP_Error {
 *         $score = My_Plugin::perform_sentiment_analysis( $input );
 *         if ( is_wp_error( $score ) ) {
 *             return $score;
 *         }
 *         return My_Plugin::interpret_sentiment_score( $score );
 *     }
 *
 * #### Permission Callback
 *
 * The permission callback determines whether the ability can be executed.
 * It receives the same input as the execute callback and must return a
 * boolean or `WP_Error`. Common use cases include checking user capabilities,
 * validating API keys, or verifying system state:
 *
 *     function my_plugin_can_analyze_text( string $input ): bool|WP_Error {
 *         return current_user_can( 'edit_posts' );
 *     }
 *
 * ### REST API Integration
 *
 * Abilities can be exposed through the REST API by setting `show_in_rest`
 * to `true` in the meta configuration:
 *
 *     'meta' => array(
 *         'show_in_rest' => true,
 *     ),
 *
 * This allows abilities to be invoked via HTTP requests to the WordPress REST API.
 *
 * @since 6.9.0
 *
 * @see WP_Abilities_Registry::register()
 * @see wp_register_ability_category()
 * @see wp_unregister_ability()
 *
 * @param string $name The name of the ability. Must be a namespaced string containing
 *                                   a prefix, e.g., `my-plugin/my-ability`. Can only contain lowercase
 *                                   alphanumeric characters, dashes, and forward slashes.
 * @param array<string, mixed> $args {
 *     An associative array of arguments for configuring the ability.
 *
 * @type string               $label               Required. The human-readable label for the ability.
 * @type string               $description         Required. A detailed description of what the ability does
 *                                                     and when it should be used.
 * @type string               $category            Required. The ability category slug this ability belongs to.
 *                                                     The ability category must be registered via `wp_register_ability_category()`
 *                                                     before registering the ability.
 * @type callable             $execute_callback    Required. A callback function to execute when the ability is invoked.
 *                                                     Receives optional mixed input data and must return either a result
 *                                                     value (any type) or a `WP_Error` object on failure.
 * @type callable             $permission_callback Required. A callback function to check permissions before execution.
 *                                                     Receives optional mixed input data (same as `execute_callback`) and
 *                                                     must return `true`/`false` for simple checks, or `WP_Error` for
 *                                                     detailed error responses.
 * @type array<string, mixed> $input_schema        Optional. JSON Schema definition for validating the ability's input.
 *                                                     Must be a valid JSON Schema object defining the structure and
 *                                                     constraints for input data. Used for automatic validation and
 *                                                     API documentation.
 * @type array<string, mixed> $output_schema       Optional. JSON Schema definition for the ability's output.
 *                                                     Describes the structure of successful return values from
 *                                                     `execute_callback`. Used for documentation and validation.
 * @type array<string, mixed> $meta                {
 *         Optional. Additional metadata for the ability.
 *
 * @type array<string, bool|null> $annotations  {
 *             Optional. Semantic annotations describing the ability's behavioral characteristics.
 *             These annotations are hints for tooling and documentation.
 *
 * @type bool|null $readonly    Optional. If true, the ability does not modify its environment.
 * @type bool|null $destructive Optional. If true, the ability may perform destructive updates to its environment.
 *                                          If false, the ability performs only additive updates.
 * @type bool|null $idempotent  Optional. If true, calling the ability repeatedly with the same arguments
 *                                          will have no additional effect on its environment.
 *         }
 * @type bool                     $show_in_rest Optional. Whether to expose this ability in the REST API.
 *                                                      When true, the ability can be invoked via HTTP requests.
 *                                                      Default false.
 *     }
 * @type string               $ability_class       Optional. Fully-qualified custom class name to instantiate
 *                                                     instead of the default `WP_Ability` class. The custom class
 *                                                     must extend `WP_Ability`. Useful for advanced customization
 *                                                     of ability behavior.
 * }
 * @return \WP_Ability|null The registered ability instance on success, `null` on failure.
 */
    public function wpRegisterAbility(string $name, array $args): \WP_Ability|null;
}
