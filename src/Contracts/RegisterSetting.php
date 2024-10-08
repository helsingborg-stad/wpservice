<?php

namespace WpService\Contracts;

interface RegisterSetting
{
    /**
 * Registers a setting and its data.
 *
 * @since 2.7.0
 * @since 3.0.0 The `misc` option group was deprecated.
 * @since 3.5.0 The `privacy` option group was deprecated.
 * @since 4.7.0 `$args` can be passed to set flags on the setting, similar to `register_meta()`.
 * @since 5.5.0 `$new_whitelist_options` was renamed to `$new_allowed_options`.
 *              Please consider writing more inclusive code.
 * @since 6.6.0 Added the `label` argument.
 *
 * @global array $new_allowed_options
 * @global array $wp_registered_settings
 *
 * @param string $optionGroup A settings group name. Should correspond to an allowed option key name.
 *                             Default allowed option key names include 'general', 'discussion', 'media',
 *                             'reading', 'writing', and 'options'.
 * @param string $optionName The name of an option to sanitize and save.
 * @param array $args {
 *     Data used to describe the setting when registered.
 *
 *     @type string     $type              The type of data associated with this setting.
 *                                         Valid values are 'string', 'boolean', 'integer', 'number', 'array', and 'object'.
 *     @type string     $label             A label of the data attached to this setting.
 *     @type string     $description       A description of the data attached to this setting.
 *     @type callable   $sanitize_callback A callback function that sanitizes the option's value.
 *     @type bool|array $show_in_rest      Whether data associated with this setting should be included in the REST API.
 *                                         When registering complex settings, this argument may optionally be an
 *                                         array with a 'schema' key.
 *     @type mixed      $default           Default value when calling `get_option()`.
 * }
 */
    public function registerSetting(string $optionGroup, string $optionName, array $args = []): void;
}
