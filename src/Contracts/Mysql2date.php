<?php

namespace WpService\Contracts;

interface Mysql2date
{
    /**
 * Converts given MySQL date string into a different format.
 *
 *  - `$format` should be a PHP date format string.
 *  - 'U' and 'G' formats will return an integer sum of timestamp with timezone offset.
 *  - `$date` is expected to be local time in MySQL format (`Y-m-d H:i:s`).
 *
 * Historically UTC time could be passed to the function to produce Unix timestamp.
 *
 * If `$translate` is true then the given date and format string will
 * be passed to `wp_date()` for translation.
 *
 * @since 0.71
 *
 * @param string $format    Format of the date to return.
 * @param string $date      Date string to convert.
 * @param bool $translate Whether the return date should be translated. Default true.
 * @return string|int|false Integer if `$format` is 'U' or 'G', string otherwise.
 *                          False on failure.
 */
    public function mysql2date(string $format, string $date, bool $translate): string|int|false;
}
