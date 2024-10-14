<?php

namespace WpService\Contracts;

interface WpNavMenuItemLinkMetaBox
{
/**
 * Displays a meta box for the custom links menu item.
 *
 * @since 3.0.0
 *
 * @global int        $_nav_menu_placeholder
 * @global int|string $nav_menu_selected_id
 */
    public function wpNavMenuItemLinkMetaBox(): void;
}
