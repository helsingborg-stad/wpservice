<?php

namespace WpService\Contracts;

interface GetCalendar
{
    /**
 * Displays calendar with days that have posts as links.
 *
 * The calendar is cached, which will be retrieved, if it exists. If there are
 * no posts for the month, then it will not be displayed.
 *
 * @since 1.0.0
 *
 * @global wpdb      $wpdb      WordPress database abstraction object.
 * @global int       $m
 * @global int       $monthnum
 * @global int       $year
 * @global WP_Locale $wp_locale WordPress date and time locale object.
 * @global array     $posts
 *
 * @param bool $initial Optional. Whether to use initial calendar names. Default true.
 * @param bool $display Optional. Whether to display the calendar output. Default true.
 * @return void|string Void if `$display` argument is true, calendar HTML if `$display` is false.
 */
    public function getCalendar(bool $initial, bool $display): string;
}
