<?php

namespace WpService\Contracts;

interface WpAdminBarWpMenu
{
    /**
     * Adds the WordPress logo menu.
     *
     * @since 3.3.0
     *
     * @param \WP_Admin_Bar $wpAdminBar The WP_Admin_Bar instance.
     */
    public function wpAdminBarWpMenu(\WP_Admin_Bar $wpAdminBar): void;
}
