<?php

namespace WpService\Contracts;

interface WpDebugMode
{
    /**
 * Sets PHP error reporting based on WordPress debug settings.
 *
 * Uses three constants: `WP_DEBUG`, `WP_DEBUG_DISPLAY`, and `WP_DEBUG_LOG`.
 * All three can be defined in wp-config.php. By default, `WP_DEBUG` and
 * `WP_DEBUG_LOG` are set to false, and `WP_DEBUG_DISPLAY` is set to true.
 *
 * When `WP_DEBUG` is true, all PHP notices are reported. WordPress will also
 * display internal notices: when a deprecated WordPress function, function
 * argument, or file is used. Deprecated code may be removed from a later
 * version.
 *
 * It is strongly recommended that plugin and theme developers use `WP_DEBUG`
 * in their development environments.
 *
 * `WP_DEBUG_DISPLAY` and `WP_DEBUG_LOG` perform no function unless `WP_DEBUG`
 * is true.
 *
 * When `WP_DEBUG_DISPLAY` is true, WordPress will force errors to be displayed.
 * `WP_DEBUG_DISPLAY` defaults to true. Defining it as null prevents WordPress
 * from changing the global configuration setting. Defining `WP_DEBUG_DISPLAY`
 * as false will force errors to be hidden.
 *
 * When `WP_DEBUG_LOG` is true, errors will be logged to `wp-content/debug.log`.
 * When `WP_DEBUG_LOG` is a valid path, errors will be logged to the specified file.
 *
 * Errors are never displayed for XML-RPC, REST, `ms-files.php`, and Ajax requests.
 *
 * @since 3.0.0
 * @since 5.1.0 `WP_DEBUG_LOG` can be a file path.
 * @access private
 */
    public function wpDebugMode(): void;
}
