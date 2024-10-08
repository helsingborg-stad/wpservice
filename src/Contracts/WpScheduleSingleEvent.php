<?php

namespace WpService\Contracts;

interface WpScheduleSingleEvent
{
    /**
 * Schedules an event to run only once.
 *
 * Schedules a hook which will be triggered by WordPress at the specified UTC time.
 * The action will trigger when someone visits your WordPress site if the scheduled
 * time has passed.
 *
 * Note that scheduling an event to occur within 10 minutes of an existing event
 * with the same action hook will be ignored unless you pass unique `$args` values
 * for each scheduled event.
 *
 * Use wp_next_scheduled() to prevent duplicate events.
 *
 * Use wp_schedule_event() to schedule a recurring event.
 *
 * @since 2.1.0
 * @since 5.1.0 Return value modified to boolean indicating success or failure,
 *              {@see 'pre_schedule_event'} filter added to short-circuit the function.
 * @since 5.7.0 The `$wp_error` parameter was added.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_schedule_single_event/
 *
 * @param int $timestamp  Unix timestamp (UTC) for when to next run the event.
 * @param string $hook       Action hook to execute when the event is run.
 * @param array $args       Optional. Array containing arguments to pass to the
 *                           hook's callback function. Each value in the array
 *                           is passed to the callback as an individual parameter.
 *                           The array keys are ignored. Default empty array.
 * @param bool $wpError   Optional. Whether to return a WP_Error on failure. Default false.
 * @return bool|\WP_Error True if event successfully scheduled. False or WP_Error on failure.
 */
    public function wpScheduleSingleEvent(int $timestamp, string $hook, array $args = [], bool $wpError = false): bool|\WP_Error;
}
