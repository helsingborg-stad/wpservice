<?php

namespace WpService\Contracts;

interface WpAdminBarAddSecondaryGroups
{
/**
 * Adds secondary menus.
 *
 * @since 3.3.0
 *
 * @param \WP_Admin_Bar $wpAdminBar The WP_Admin_Bar instance.
 */
    public function wpAdminBarAddSecondaryGroups(\WP_Admin_Bar $wpAdminBar): void;
}
