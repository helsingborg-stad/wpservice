<?php

namespace WpService\Contracts;

interface GetDayLink
{
/**
 * Retrieves the permalink for the day archives with year and month.
 *
 * @since 1.0.0
 *
 * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
 *
 * @param int|false $year  Integer of year. False for current year.
 * @param int|false $month Integer of month. False for current month.
 * @param int|false $day   Integer of day. False for current day.
 * @return string The permalink for the specified day, month, and year archive.
 */
    public function getDayLink(int|false $year, int|false $month, int|false $day): string;
}
