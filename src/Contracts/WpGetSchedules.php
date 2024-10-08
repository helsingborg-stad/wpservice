<?php

namespace WpService\Contracts;

interface WpGetSchedules
{
    /**
     * Retrieves supported event recurrence schedules.
     *
     * The default supported recurrences are 'hourly', 'twicedaily', 'daily', and 'weekly'.
     * A plugin may add more by hooking into the {@see 'cron_schedules'} filter.
     * The filter accepts an array of arrays. The outer array has a key that is the name
     * of the schedule, for example 'monthly'. The value is an array with two keys,
     * one is 'interval' and the other is 'display'.
     *
     * The 'interval' is a number in seconds of when the cron job should run.
     * So for 'hourly' the time is `HOUR_IN_SECONDS` (`60 * 60` or `3600`). For 'monthly',
     * the value would be `MONTH_IN_SECONDS` (`30 * 24 * 60 * 60` or `2592000`).
     *
     * The 'display' is the description. For the 'monthly' key, the 'display'
     * would be `__( 'Once Monthly' )`.
     *
     * For your plugin, you will be passed an array. You can add your
     * schedule by doing the following:
     *
     *     // Filter parameter variable name is 'array'.
     *     $array['monthly'] = array(
     *         'interval' => MONTH_IN_SECONDS,
     *         'display'  => __( 'Once Monthly' )
     *     );
     *
     * @since 2.1.0
     * @since 5.4.0 The 'weekly' schedule was added.
     *
     * @return array {
     *     The array of cron schedules keyed by the schedule name.
     *
     * @type array ...$0 {
     *         Cron schedule information.
     *
     * @type int    $interval The schedule interval in seconds.
     * @type string $display  The schedule display name.
     *     }
     * }
     */
    public function wpGetSchedules(): array;
}
