<?php

namespace WpService\Contracts;

interface WpAdminBarSidebarToggle
{
/**
 * Adds the sidebar toggle button.
 *
 * @since 3.8.0
 *
 * @param \WP_Admin_Bar $wpAdminBar The WP_Admin_Bar instance.
 */
    public function wpAdminBarSidebarToggle(\WP_Admin_Bar $wpAdminBar): void;
}
