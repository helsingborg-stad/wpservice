<?php

namespace WpService\Contracts;

interface WpGetSidebarsWidgets
{
    /**
 * Retrieve full list of sidebars and their widget instance IDs.
 *
 * Will upgrade sidebar widget list, if needed. Will also save updated list, if
 * needed.
 *
 * @since 2.2.0
 * @access private
 *
 * @global array $_wp_sidebars_widgets
 * @global array $sidebars_widgets
 *
 * @param bool $deprecated Not used (argument deprecated).
 * @return array Upgraded list of widgets to version 3 array format when called from the admin.
 */
    public function wpGetSidebarsWidgets(bool $deprecated): array;
}
