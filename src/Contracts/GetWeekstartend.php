<?php

namespace WpService\Contracts;

interface GetWeekstartend
{
    /**
 * Gets the week start and end from the datetime or date string from MySQL.
 *
 * @since 0.71
 *
 * @param string $mysqlstring   Date or datetime field type from MySQL.
 * @param int|string $startOfWeek Optional. Start of the week as an integer. Default empty string.
 * @return int[] {
 *     Week start and end dates as Unix timestamps.
 *
 *     @type int $start The week start date as a Unix timestamp.
 *     @type int $end   The week end date as a Unix timestamp.
 * }
 */
    public function getWeekstartend(string $mysqlstring, int|string $startOfWeek = ''): array;
}
