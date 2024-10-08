<?php

namespace WpService\Contracts;

interface WpDashboardTriggerWidgetControl
{
    /**
 * Calls widget control callback.
 *
 * @since 2.5.0
 *
 * @global callable[] $wp_dashboard_control_callbacks
 *
 * @param int|false $widgetControlId Optional. Registered widget ID. Default false.
 */
    public function wpDashboardTriggerWidgetControl(int|false $widgetControlId): void;
}
