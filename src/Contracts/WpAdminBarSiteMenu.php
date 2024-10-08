<?php

namespace WpService\Contracts;

interface WpAdminBarSiteMenu
{
    /**
 * Adds the "Site Name" menu.
 *
 * @since 3.3.0
 *
 * @param \WP_Admin_Bar $wpAdminBar The WP_Admin_Bar instance.
 */
    public function wpAdminBarSiteMenu(\WP_Admin_Bar $wpAdminBar): void;
}
