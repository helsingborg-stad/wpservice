<?php

namespace WpService\Contracts;

interface WpGetDevelopmentMode
{
/**
 * Retrieves the current development mode.
 *
 * The development mode affects how certain parts of the WordPress application behave,
 * which is relevant when developing for WordPress.
 *
 * Development mode can be set via the `WP_DEVELOPMENT_MODE` constant in `wp-config.php`.
 * Possible values are 'core', 'plugin', 'theme', 'all', or an empty string to disable
 * development mode. 'all' is a special value to signify that all three development modes
 * ('core', 'plugin', and 'theme') are enabled.
 *
 * Development mode is considered separately from `WP_DEBUG` and wp_get_environment_type().
 * It does not affect debugging output, but rather functional nuances in WordPress.
 *
 * This function retrieves the currently set development mode value. To check whether
 * a specific development mode is enabled, use wp_is_development_mode().
 *
 * @since 6.3.0
 *
 * @return string The current development mode.
 */
    public function wpGetDevelopmentMode(): string;
}
