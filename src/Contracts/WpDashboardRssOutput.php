<?php

namespace WpService\Contracts;

interface WpDashboardRssOutput
{
    /**
     * Display generic dashboard RSS widget feed.
     *
     * @since 2.5.0
     *
     * @param string $widgetId
     */
    public function wpDashboardRssOutput(string $widgetId): void;
}
