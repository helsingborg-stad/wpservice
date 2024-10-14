<?php

namespace WpService\Contracts;

interface DateI18n
{
/**
 * Retrieves the date in localized format, based on a sum of Unix timestamp and
 * timezone offset in seconds.
 *
 * If the locale specifies the locale month and weekday, then the locale will
 * take over the format for the date. If it isn't, then the date format string
 * will be used instead.
 *
 * Note that due to the way WP typically generates a sum of timestamp and offset
 * with `strtotime()`, it implies offset added at a _current_ time, not at the time
 * the timestamp represents. Storing such timestamps or calculating them differently
 * will lead to invalid output.
 *
 * @since 0.71
 * @since 5.3.0 Converted into a wrapper for wp_date().
 *
 * @param string $format                Format to display the date.
 * @param int|bool $timestampWithOffset Optional. A sum of Unix timestamp and timezone offset
 *                                        in seconds. Default false.
 * @param bool $gmt                   Optional. Whether to use GMT timezone. Only applies
 *                                        if timestamp is not provided. Default false.
 * @return string The date, translated if locale specifies it.
 */
    public function dateI18n(string $format, int|bool $timestampWithOffset = false, bool $gmt = false): string;
}
