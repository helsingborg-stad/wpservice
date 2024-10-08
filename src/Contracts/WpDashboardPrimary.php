<?php

namespace WpService\Contracts;

interface WpDashboardPrimary
{
    /**
     * 'WordPress Events and News' dashboard widget.
     *
     * @since 2.7.0
     * @since 4.8.0 Removed popular plugins feed.
     */
    public function wpDashboardPrimary(): void;
}
