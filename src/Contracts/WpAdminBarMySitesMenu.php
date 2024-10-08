<?php

namespace WpService\Contracts;

interface WpAdminBarMySitesMenu
{
    /**
 * Adds the "My Sites/[Site Name]" menu and all submenus.
 *
 * @since 3.1.0
 *
 * @param \WP_Admin_Bar $wpAdminBar The WP_Admin_Bar instance.
 */
    public function wpAdminBarMySitesMenu(\WP_Admin_Bar $wpAdminBar): void;
}
