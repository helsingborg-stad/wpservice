<?php

namespace WpService\Contracts;

interface WpAdminBarShortlinkMenu
{
    /**
     * Provides a shortlink.
     *
     * @since 3.1.0
     *
     * @param \WP_Admin_Bar $wpAdminBar The WP_Admin_Bar instance.
     */
    public function wpAdminBarShortlinkMenu(\WP_Admin_Bar $wpAdminBar): void;
}
