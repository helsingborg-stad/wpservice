<?php

namespace WpService\Contracts;

interface WpMapSidebarsWidgets
{
    /**
 * Compares a list of sidebars with their widgets against an allowed list.
 *
 * @since 4.9.0
 * @since 4.9.2 Always tries to restore widget assignments from previous data, not just if sidebars needed mapping.
 *
 * @global array $wp_registered_sidebars The registered sidebars.
 *
 * @param array $existingSidebarsWidgets List of sidebars and their widget instance IDs.
 * @return array Mapped sidebars widgets.
 */
    public function wpMapSidebarsWidgets(array $existingSidebarsWidgets): array;
}
