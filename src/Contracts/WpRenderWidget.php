<?php

namespace WpService\Contracts;

interface WpRenderWidget
{
    /**
 * Calls the render callback of a widget and returns the output.
 *
 * @since 5.8.0
 *
 * @global array $wp_registered_widgets  The registered widgets.
 * @global array $wp_registered_sidebars The registered sidebars.
 *
 * @param string $widgetId Widget ID.
 * @param string $sidebarId Sidebar ID.
 * @return string
 */
    public function wpRenderWidget(string $widgetId, string $sidebarId): string;
}
