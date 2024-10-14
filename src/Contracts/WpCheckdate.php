<?php

namespace WpService\Contracts;

interface WpCheckdate
{
/**
 * Tests if the supplied date is valid for the Gregorian calendar.
 *
 * @since 3.5.0
 *
 * @link https://www.php.net/manual/en/function.checkdate.php
 *
 * @param int $month       Month number.
 * @param int $day         Day number.
 * @param int $year        Year number.
 * @param string $sourceDate The date to filter.
 * @return bool True if valid date, false if not valid date.
 */
    public function wpCheckdate(int $month, int $day, int $year, string $sourceDate): bool;
}
