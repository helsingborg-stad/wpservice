<?php

namespace WpService\Contracts;

interface WpAdminBarMyAccountMenu
{
    /**
     * Adds the "My Account" submenu items.
     *
     * @since 3.1.0
     *
     * @param \WP_Admin_Bar $wpAdminBar The WP_Admin_Bar instance.
     */
    public function wpAdminBarMyAccountMenu(\WP_Admin_Bar $wpAdminBar): void;
}
