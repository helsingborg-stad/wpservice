<?php

namespace WpService\Contracts;

interface WpDashboardSiteActivity
{
    /**
     * Outputs the Activity widget.
     *
     * Callback function for {@see 'dashboard_activity'}.
     *
     * @since 3.8.0
     */
    public function wpDashboardSiteActivity(): void;
}
