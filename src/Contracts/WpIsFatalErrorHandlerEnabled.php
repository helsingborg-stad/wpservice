<?php

namespace WpService\Contracts;

interface WpIsFatalErrorHandlerEnabled
{
    /**
     * Checks whether the fatal error handler is enabled.
     *
     * A constant `WP_DISABLE_FATAL_ERROR_HANDLER` can be set in `wp-config.php` to disable it, or alternatively the
     * {@see 'wp_fatal_error_handler_enabled'} filter can be used to modify the return value.
     *
     * @since 5.2.0
     *
     * @return bool True if the fatal error handler is enabled, false otherwise.
     */
    public function wpIsFatalErrorHandlerEnabled(): bool;
}
