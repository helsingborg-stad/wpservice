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
 * @since 6.8.0 Added the `$args` parameter, with backward compatibility
 *              for the replaced `$initial` and `$display` parameters.
 *
 * @global wpdb      $wpdb      WordPress database abstraction object.
 * @global int       $m
 * @global int       $monthnum
 * @global int       $year
 * @global WP_Locale $wp_locale WordPress date and time locale object.
 * @global array     $posts
 *
 * @param array $args {
 *     Optional. Arguments for the `get_calendar` function.
 *
 * @type bool   $initial   Whether to use initial calendar names. Default true.
 * @type bool   $display   Whether to display the calendar output. Default true.
 * @type string $post_type Optional. Post type. Default 'post'.
 * }
 * @return void|string Void if `$display` argument is true, calendar HTML if `$display` is false.
 */
    public function getCalendar(array $args = []): mixed;
}
