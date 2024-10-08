<?php

namespace WpService\Contracts;

interface WpScheduleUpdateUserCounts
{
    /**
 * Schedules a recurring recalculation of the total count of users.
 *
 * @since 6.0.0
 */
    public function wpScheduleUpdateUserCounts(): void;
}
