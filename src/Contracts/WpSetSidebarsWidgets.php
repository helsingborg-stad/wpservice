<?php

namespace WpService\Contracts;

interface WpSetSidebarsWidgets
{
    /**
 * Set the sidebar widget option to update sidebars.
 *
 * @since 2.2.0
 * @access private
 *
 * @global array $_wp_sidebars_widgets
 * @param array $sidebarsWidgets Sidebar widgets and their settings.
 */
    public function wpSetSidebarsWidgets(array $sidebarsWidgets): void;
}
