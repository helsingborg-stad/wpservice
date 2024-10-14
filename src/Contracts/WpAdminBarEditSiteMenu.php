<?php

namespace WpService\Contracts;

interface WpAdminBarEditSiteMenu
{
/**
 * Adds the "Edit site" link to the Toolbar.
 *
 * @since 5.9.0
 * @since 6.3.0 Added `$_wp_current_template_id` global for editing of current template directly from the admin bar.
 * @since 6.6.0 Added the `canvas` query arg to the Site Editor link.
 *
 * @global string $_wp_current_template_id
 *
 * @param \WP_Admin_Bar $wpAdminBar The WP_Admin_Bar instance.
 */
    public function wpAdminBarEditSiteMenu(\WP_Admin_Bar $wpAdminBar): void;
}
