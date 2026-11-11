<?php

namespace WpService\Contracts;

interface GetRegisteredSettings
{
/**
 * Retrieves an array of registered settings.
 *
 * @since 4.7.0
 *
 * @global array $wp_registered_settings
 *
 * @return array {
 *     List of registered settings, keyed by option name.
 *
 * @type array ...$0 {
 *         Data used to describe the setting when registered.
 *
 * @type string     $type              The type of data associated with this setting.
 *                                             Valid values are 'string', 'boolean', 'integer', 'number', 'array', and 'object'.
 * @type string     $label             A label of the data attached to this setting.
 * @type string     $description       A description of the data attached to this setting.
 * @type callable   $sanitize_callback A callback function that sanitizes the option's value.
 * @type bool|array $show_in_rest      Whether data associated with this setting should be included in the REST API.
 *                                             When registering complex settings, this argument may optionally be an
 *                                             array with a 'schema' key.
 * @type mixed      $default           Default value when calling `get_option()`.
 *     }
 * }
 */
    public function getRegisteredSettings(): array;
}
