<?php

namespace WpService\Contracts;

interface WpRoles
{
/**
 * Retrieves the global WP_Roles instance and instantiates it if necessary.
 *
 * @since 4.3.0
 *
 * @global WP_Roles $wp_roles WordPress role management object.
 *
 * @return \WP_Roles WP_Roles global instance if not already instantiated.
 */
    public function wpRoles(): \WP_Roles;
}
