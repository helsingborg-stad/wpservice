<?php

namespace WpService\Contracts;

interface WpAssignWidgetToSidebar
{
/**
 * Assigns a widget to the given sidebar.
 *
 * @since 5.8.0
 *
 * @param string $widgetId  The widget ID to assign.
 * @param string $sidebarId The sidebar ID to assign to. If empty, the widget won't be added to any sidebar.
 */
    public function wpAssignWidgetToSidebar(string $widgetId, string $sidebarId): void;
}
