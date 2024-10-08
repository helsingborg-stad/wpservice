<?php

namespace WpService\Contracts;

interface WpDashboardRssControl
{
    /**
     * Sets up the RSS dashboard widget control and $args to be used as input to wp_widget_rss_form().
     *
     * Handles POST data from RSS-type widgets.
     *
     * @since 2.5.0
     *
     * @param string $widgetId
     * @param array $formInputs
     */
    public function wpDashboardRssControl(string $widgetId, array $formInputs = []): void;
}
