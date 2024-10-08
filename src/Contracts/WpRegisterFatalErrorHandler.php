<?php

namespace WpService\Contracts;

interface WpRegisterFatalErrorHandler
{
    /**
 * Registers the shutdown handler for fatal errors.
 *
 * The handler will only be registered if {@see wp_is_fatal_error_handler_enabled()} returns true.
 *
 * @since 5.2.0
 */
    public function wpRegisterFatalErrorHandler(): void;
}
