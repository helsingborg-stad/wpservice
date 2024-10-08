<?php

namespace WpService\Contracts;

interface WpGetScheduledEvent
{
    /**
 * Retrieves a scheduled event.
 *
 * Retrieves the full event object for a given event, if no timestamp is specified the next
 * scheduled event is returned.
 *
 * @since 5.1.0
 *
 * @param string $hook      Action hook of the event.
 * @param array $args      Optional. Array containing each separate argument to pass to the hook's callback function.
 *                            Although not passed to a callback, these arguments are used to uniquely identify the
 *                            event, so they should be the same as those used when originally scheduling the event.
 *                            Default empty array.
 * @param int|null $timestamp Optional. Unix timestamp (UTC) of the event. If not specified, the next scheduled event
 *                            is returned. Default null.
 * @return object|false {
 *     The event object. False if the event does not exist.
 *
 *     @type string       $hook      Action hook to execute when the event is run.
 *     @type int          $timestamp Unix timestamp (UTC) for when to next run the event.
 *     @type string|false $schedule  How often the event should subsequently recur.
 *     @type array        $args      Array containing each separate argument to pass to the hook's callback function.
 *     @type int          $interval  Optional. The interval time in seconds for the schedule. Only present for recurring events.
 * }
 */
    public function wpGetScheduledEvent(string $hook, array $args, int|null $timestamp): object|false;
}
