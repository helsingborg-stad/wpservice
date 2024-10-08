<?php

namespace WpService\Contracts;

interface WpFindWidgetsSidebar
{
    /**
     * Finds the sidebar that a given widget belongs to.
     *
     * @since 5.8.0
     *
     * @param string $widgetId The widget ID to look for.
     * @return string|null The found sidebar's ID, or null if it was not found.
     */
    public function wpFindWidgetsSidebar(string $widgetId): string|null;
}
