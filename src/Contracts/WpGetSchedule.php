<?php

namespace WpService\Contracts;

interface WpGetSchedule
{
    /**
 * Retrieves the name of the recurrence schedule for an event.
 *
 * @see wp_get_schedules() for available schedules.
 *
 * @since 2.1.0
 * @since 5.1.0 {@see 'get_schedule'} filter added.
 *
 * @param string $hook Action hook to identify the event.
 * @param array $args Optional. Arguments passed to the event's callback function.
 *                     Default empty array.
 * @return string|false Schedule name on success, false if no schedule.
 */
    public function wpGetSchedule(string $hook, array $args = []): string|false;
}
