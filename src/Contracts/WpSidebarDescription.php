<?php

namespace WpService\Contracts;

interface WpSidebarDescription
{
    /**
 * Retrieve description for a sidebar.
 *
 * When registering sidebars a 'description' parameter can be included that
 * describes the sidebar for display on the widget administration panel.
 *
 * @since 2.9.0
 *
 * @global array $wp_registered_sidebars The registered sidebars.
 *
 * @param string $id sidebar ID.
 * @return string|void Sidebar description, if available.
 */
    public function wpSidebarDescription(string $id): mixed;
}
