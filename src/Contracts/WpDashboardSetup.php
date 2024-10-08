<?php

namespace WpService\Contracts;

interface WpDashboardSetup
{
    /**
     * Registers dashboard widgets.
     *
     * Handles POST data, sets up filters.
     *
     * @since 2.5.0
     *
     * @global array $wp_registered_widgets
     * @global array $wp_registered_widget_controls
     * @global callable[] $wp_dashboard_control_callbacks
     */
    public function wpDashboardSetup(): void;
}
