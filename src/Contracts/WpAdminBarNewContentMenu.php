<?php

namespace WpService\Contracts;

interface WpAdminBarNewContentMenu
{
    /**
     * Adds "Add New" menu.
     *
     * @since 3.1.0
     * @since 6.5.0 Added a New Site link for network installations.
     *
     * @param \WP_Admin_Bar $wpAdminBar The WP_Admin_Bar instance.
     */
    public function wpAdminBarNewContentMenu(\WP_Admin_Bar $wpAdminBar): void;
}
