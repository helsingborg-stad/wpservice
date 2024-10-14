<?php

namespace WpService\Contracts;

interface WpScheduleUpdateChecks
{
/**
 * Schedules core, theme, and plugin update checks.
 *
 * @since 3.1.0
 */
    public function wpScheduleUpdateChecks(): void;
}
