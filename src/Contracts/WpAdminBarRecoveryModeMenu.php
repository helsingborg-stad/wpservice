<?php

namespace WpService\Contracts;

interface WpAdminBarRecoveryModeMenu
{
    /**
 * Adds a link to exit recovery mode when Recovery Mode is active.
 *
 * @since 5.2.0
 *
 * @param \WP_Admin_Bar $wpAdminBar The WP_Admin_Bar instance.
 */
    public function wpAdminBarRecoveryModeMenu(\WP_Admin_Bar $wpAdminBar): void;
}
