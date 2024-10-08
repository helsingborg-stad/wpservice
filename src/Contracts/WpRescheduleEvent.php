<?php

namespace WpService\Contracts;

interface WpRescheduleEvent
{
    /**
     * Reschedules a recurring event.
     *
     * Mainly for internal use, this takes the UTC timestamp of a previously run
     * recurring event and reschedules it for its next run.
     *
     * To change upcoming scheduled events, use wp_schedule_event() to
     * change the recurrence frequency.
     *
     * @since 2.1.0
     * @since 5.1.0 Return value modified to boolean indicating success or failure,
     *              {@see 'pre_reschedule_event'} filter added to short-circuit the function.
     * @since 5.7.0 The `$wp_error` parameter was added.
     *
     * @param int $timestamp  Unix timestamp (UTC) for when the event was scheduled.
     * @param string $recurrence How often the event should subsequently recur.
     *                           See wp_get_schedules() for accepted values.
     * @param string $hook       Action hook to execute when the event is run.
     * @param array $args       Optional. Array containing arguments to pass to the
     *                           hook's callback function. Each value in the array
     *                           is passed to the callback as an individual parameter.
     *                           The array keys are ignored. Default empty array.
     * @param bool $wpError   Optional. Whether to return a WP_Error on failure. Default false.
     * @return bool|\WP_Error True if event successfully rescheduled. False or WP_Error on failure.
     */
    public function wpRescheduleEvent(int $timestamp, string $recurrence, string $hook, array $args = [], bool $wpError = false): bool|\WP_Error;
}
