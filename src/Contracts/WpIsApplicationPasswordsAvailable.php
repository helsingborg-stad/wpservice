<?php

namespace WpService\Contracts;

interface WpIsApplicationPasswordsAvailable
{
    /**
     * Checks if Application Passwords is globally available.
     *
     * By default, Application Passwords is available to all sites using SSL or to local environments.
     * Use the {@see 'wp_is_application_passwords_available'} filter to adjust its availability.
     *
     * @since 5.6.0
     *
     * @return bool
     */
    public function wpIsApplicationPasswordsAvailable(): bool;
}
