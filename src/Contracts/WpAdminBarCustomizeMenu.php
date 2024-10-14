<?php

namespace WpService\Contracts;

interface WpAdminBarCustomizeMenu
{
/**
 * Adds the "Customize" link to the Toolbar.
 *
 * @since 4.3.0
 *
 * @global WP_Customize_Manager $wp_customize
 *
 * @param \WP_Admin_Bar $wpAdminBar The WP_Admin_Bar instance.
 */
    public function wpAdminBarCustomizeMenu(\WP_Admin_Bar $wpAdminBar): void;
}
