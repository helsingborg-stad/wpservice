<?php

namespace WpService\Contracts;

interface WpListWidgetControls
{
/**
 * Show the widgets and their settings for a sidebar.
 * Used in the admin widget config screen.
 *
 * @since 2.5.0
 *
 * @param string $sidebar      Sidebar ID.
 * @param string $sidebarName Optional. Sidebar name. Default empty.
 */
    public function wpListWidgetControls(string $sidebar, string $sidebarName = ''): void;
}
