<?php

namespace WpService\Contracts;

interface WpIsApplicationPasswordsSupported
{
    /**
     * Checks if Application Passwords is supported.
     *
     * Application Passwords is supported only by sites using SSL or local environments
     * but may be made available using the {@see 'wp_is_application_passwords_available'} filter.
     *
     * @since 5.9.0
     *
     * @return bool
     */
    public function wpIsApplicationPasswordsSupported(): bool;
}
