<?php

namespace WpService\Contracts;

interface WpWidgetControl
{
    /**
 * Meta widget used to display the control form for a widget.
 *
 * Called from dynamic_sidebar().
 *
 * @since 2.5.0
 *
 * @global array $wp_registered_widgets
 * @global array $wp_registered_widget_controls
 * @global array $sidebars_widgets
 *
 * @param array $sidebarArgs
 * @return array
 */
    public function wpWidgetControl(array $sidebarArgs): array;
}
