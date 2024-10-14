<?php

namespace WpService\Contracts;

interface SettingsErrors
{
/**
 * Displays settings errors registered by add_settings_error().
 *
 * Part of the Settings API. Outputs a div for each error retrieved by
 * get_settings_errors().
 *
 * This is called automatically after a settings page based on the
 * Settings API is submitted. Errors should be added during the validation
 * callback function for a setting defined in register_setting().
 *
 * The $sanitize option is passed into get_settings_errors() and will
 * re-run the setting sanitization
 * on its current value.
 *
 * The $hide_on_update option will cause errors to only show when the settings
 * page is first loaded. if the user has already saved new values it will be
 * hidden to avoid repeating messages already shown in the default error
 * reporting after submission. This is useful to show general errors like
 * missing settings when the user arrives at the settings page.
 *
 * @since 3.0.0
 * @since 5.3.0 Legacy `error` and `updated` CSS classes are mapped to
 *              `notice-error` and `notice-success`.
 *
 * @param string $setting        Optional slug title of a specific setting whose errors you want.
 * @param bool $sanitize       Whether to re-sanitize the setting value before returning errors.
 * @param bool $hideOnUpdate If set to true errors will not be shown if the settings page has
 *                               already been submitted.
 */
    public function settingsErrors(string $setting = '', bool $sanitize = false, bool $hideOnUpdate = false): void;
}
