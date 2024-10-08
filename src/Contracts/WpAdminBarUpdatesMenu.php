<?php

namespace WpService\Contracts;

interface WpAdminBarUpdatesMenu
{
    /**
     * Provides an update link if theme/plugin/core updates are available.
     *
     * @since 3.1.0
     *
     * @param \WP_Admin_Bar $wpAdminBar The WP_Admin_Bar instance.
     */
    public function wpAdminBarUpdatesMenu(\WP_Admin_Bar $wpAdminBar): void;
}
