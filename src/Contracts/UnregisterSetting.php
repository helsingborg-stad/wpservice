<?php

namespace WpService\Contracts;

interface UnregisterSetting
{
/**
 * Unregisters a setting.
 *
 * @since 2.7.0
 * @since 4.7.0 `$sanitize_callback` was deprecated. The callback from `register_setting()` is now used instead.
 * @since 5.5.0 `$new_whitelist_options` was renamed to `$new_allowed_options`.
 *              Please consider writing more inclusive code.
 *
 * @global array $new_allowed_options
 * @global array $wp_registered_settings
 *
 * @param string $optionGroup The settings group name used during registration.
 * @param string $optionName  The name of the option to unregister.
 * @param callable $deprecated   Optional. Deprecated.
 */
    public function unregisterSetting(string $optionGroup, string $optionName, callable $deprecated = null): void;
}
