<?php

namespace WpService\Contracts;

interface WpAdminBarAppearanceMenu
{
/**
 * Adds appearance submenu items to the "Site Name" menu.
 *
 * @since 3.1.0
 *
 * @param \WP_Admin_Bar $wpAdminBar The WP_Admin_Bar instance.
 */
    public function wpAdminBarAppearanceMenu(\WP_Admin_Bar $wpAdminBar): void;
}
