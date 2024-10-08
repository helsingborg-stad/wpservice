<?php

namespace WpService\Contracts;

interface WpDashboardRightNow
{
    /**
     * Dashboard widget that displays some basic stats about the site.
     *
     * Formerly 'Right Now'. A streamlined 'At a Glance' as of 3.8.
     *
     * @since 2.7.0
     */
    public function wpDashboardRightNow(): void;
}
