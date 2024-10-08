<?php

namespace WpService\Contracts;

interface WpAuthCheckLoad
{
    /**
     * Loads the auth check for monitoring whether the user is still logged in.
     *
     * Can be disabled with remove_action( 'admin_enqueue_scripts', 'wp_auth_check_load' );
     *
     * This is disabled for certain screens where a login screen could cause an
     * inconvenient interruption. A filter called {@see 'wp_auth_check_load'} can be used
     * for fine-grained control.
     *
     * @since 3.6.0
     */
    public function wpAuthCheckLoad(): void;
}
