<?php

namespace WpService\Contracts;

interface RegisterThemeFeature
{
    /**
 * Registers a theme feature for use in add_theme_support().
 *
 * This does not indicate that the active theme supports the feature, it only describes
 * the feature's supported options.
 *
 * @since 5.5.0
 *
 * @see add_theme_support()
 *
 * @global array $_wp_registered_theme_features
 *
 * @param string $feature The name uniquely identifying the feature. See add_theme_support()
 *                        for the list of possible values.
 * @param array $args {
 *     Data used to describe the theme.
 *
 *     @type string     $type         The type of data associated with this feature.
 *                                    Valid values are 'string', 'boolean', 'integer',
 *                                    'number', 'array', and 'object'. Defaults to 'boolean'.
 *     @type bool       $variadic     Does this feature utilize the variadic support
 *                                    of add_theme_support(), or are all arguments specified
 *                                    as the second parameter. Must be used with the "array" type.
 *     @type string     $description  A short description of the feature. Included in
 *                                    the Themes REST API schema. Intended for developers.
 *     @type bool|array $show_in_rest {
 *         Whether this feature should be included in the Themes REST API endpoint.
 *         Defaults to not being included. When registering an 'array' or 'object' type,
 *         this argument must be an array with the 'schema' key.
 *
 *         @type array    $schema           Specifies the JSON Schema definition describing
 *                                          the feature. If any objects in the schema do not include
 *                                          the 'additionalProperties' keyword, it is set to false.
 *         @type string   $name             An alternate name to be used as the property name
 *                                          in the REST API.
 *         @type callable $prepare_callback A function used to format the theme support in the REST API.
 *                                          Receives the raw theme support value.
 *      }
 * }
 * @return true|\WP_Error True if the theme feature was successfully registered, a WP_Error object if not.
 */
    public function registerThemeFeature(string $feature, array $args): true|\WP_Error;
}
