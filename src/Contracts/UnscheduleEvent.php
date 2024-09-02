<?php

namespace WpService\Contracts;

use WP_Error;

interface UnscheduleEvent
{
    /**
     * Unschedule a previously scheduled event.
     *
     * @see https://developer.wordpress.org/reference/functions/wp_unschedule_event/
     *
     * @param int    $timestamp The Unix timestamp of the event.
     * @param string $hook      The action hook to which the event is attached.
     * @param array  $args      Optional. The arguments that were passed when the event was scheduled.
     * @param bool   $wpError   Optional. Whether to return a WP_Error on failure.
     */
    public function unscheduleEvent(int $timestamp, string $hook, array $args = [], $wpError = false): bool|WP_Error;
}
