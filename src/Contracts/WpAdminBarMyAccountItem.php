<?php

namespace WpService\Contracts;

interface WpAdminBarMyAccountItem
{
    /**
     * Adds the "My Account" item.
     *
     * @since 3.3.0
     *
     * @param \WP_Admin_Bar $wpAdminBar The WP_Admin_Bar instance.
     */
    public function wpAdminBarMyAccountItem(\WP_Admin_Bar $wpAdminBar): void;
}
