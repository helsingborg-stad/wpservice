<?php

namespace WpService\Contracts;

interface RegisterAdminColorSchemes
{
    /**
 * Registers the default admin color schemes.
 *
 * Registers the initial set of eight color schemes in the Profile section
 * of the dashboard which allows for styling the admin menu and toolbar.
 *
 * @see wp_admin_css_color()
 *
 * @since 3.0.0
 */
    public function registerAdminColorSchemes(): void;
}
