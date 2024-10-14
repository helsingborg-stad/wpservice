<?php

namespace WpService\Contracts;

interface WpAdminBarSearchMenu
{
/**
 * Adds search form.
 *
 * @since 3.3.0
 *
 * @param \WP_Admin_Bar $wpAdminBar The WP_Admin_Bar instance.
 */
    public function wpAdminBarSearchMenu(\WP_Admin_Bar $wpAdminBar): void;
}
