<?php

namespace WpService\Contracts;

interface CalendarWeekMod
{
    /**
 * Gets number of days since the start of the week.
 *
 * @since 1.5.0
 *
 * @param int $num Number of day.
 * @return float Days since the start of the week.
 */
    public function calendarWeekMod(int $num): float;
}
