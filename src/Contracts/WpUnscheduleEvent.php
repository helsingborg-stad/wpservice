<?php

namespace WpService\Contracts;

interface WpUnscheduleEvent
{
    /**
 * Unschedules a previously scheduled event.
 *
 * The `$timestamp` and `$hook` parameters are required so that the event can be
 * identified.
 *
 * @since 2.1.0
 * @since 5.1.0 Return value modified to boolean indicating success or failure,
 *              {@see 'pre_unschedule_event'} filter added to short-circuit the function.
 * @since 5.7.0 The `$wp_error` parameter was added.
 *
 * @param int $timestamp Unix timestamp (UTC) of the event.
 * @param string $hook      Action hook of the event.
 * @param array $args      Optional. Array containing each separate argument to pass to the hook's callback function.
 *                          Although not passed to a callback, these arguments are used to uniquely identify the
 *                          event, so they should be the same as those used when originally scheduling the event.
 *                          Default empty array.
 * @param bool $wpError  Optional. Whether to return a WP_Error on failure. Default false.
 * @return bool|\WP_Error True if event successfully unscheduled. False or WP_Error on failure.
 */
    public function wpUnscheduleEvent(int $timestamp, string $hook, array $args, bool $wpError): bool|\WP_Error;
}
