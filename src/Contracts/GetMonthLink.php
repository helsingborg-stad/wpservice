<?php

namespace WpService\Contracts;

interface GetMonthLink
{
    /**
 * Retrieves the permalink for the month archives with year.
 *
 * @since 1.0.0
 *
 * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
 *
 * @param int|false $year  Integer of year. False for current year.
 * @param int|false $month Integer of month. False for current month.
 * @return string The permalink for the specified month and year archive.
 */
    public function getMonthLink(int|false $year, int|false $month): string;
}
