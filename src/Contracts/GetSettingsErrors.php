<?php

namespace WpService\Contracts;

interface GetSettingsErrors
{
    /**
 * Fetches settings errors registered by add_settings_error().
 *
 * Checks the $wp_settings_errors array for any errors declared during the current
 * pageload and returns them.
 *
 * If changes were just submitted ($_GET['settings-updated']) and settings errors were saved
 * to the 'settings_errors' transient then those errors will be returned instead. This
 * is used to pass errors back across pageloads.
 *
 * Use the $sanitize argument to manually re-sanitize the option before returning errors.
 * This is useful if you have errors or notices you want to show even when the user
 * hasn't submitted data (i.e. when they first load an options page, or in the {@see 'admin_notices'}
 * action hook).
 *
 * @since 3.0.0
 *
 * @global array[] $wp_settings_errors Storage array of errors registered during this pageload
 *
 * @param string $setting  Optional. Slug title of a specific setting whose errors you want.
 * @param bool $sanitize Optional. Whether to re-sanitize the setting value before returning errors.
 * @return array[] {
 *     Array of settings error arrays.
 *
 *     @type array ...$0 {
 *         Associative array of setting error data.
 *
 *         @type string $setting Slug title of the setting to which this error applies.
 *         @type string $code    Slug-name to identify the error. Used as part of 'id' attribute in HTML output.
 *         @type string $message The formatted message text to display to the user (will be shown inside styled
 *                               `<div>` and `<p>` tags).
 *         @type string $type    Optional. Message type, controls HTML class. Possible values include 'error',
 *                               'success', 'warning', 'info'. Default 'error'.
 *     }
 * }
 */
    public function getSettingsErrors(string $setting, bool $sanitize): array;
}
