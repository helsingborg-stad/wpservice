<?php

namespace WpService\Contracts;

interface WpDashboardPrimaryOutput
{
    /**
 * Displays the WordPress events and news feeds.
 *
 * @since 3.8.0
 * @since 4.8.0 Removed popular plugins feed.
 *
 * @param string $widgetId Widget ID.
 * @param array $feeds     Array of RSS feeds.
 */
    public function wpDashboardPrimaryOutput(string $widgetId, array $feeds): void;
}
