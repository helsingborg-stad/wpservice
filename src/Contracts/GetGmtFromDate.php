<?php

namespace WpService\Contracts;

interface GetGmtFromDate
{
/**
 * Given a date in the timezone of the site, returns that date in UTC.
 *
 * Requires and returns a date in the Y-m-d H:i:s format.
 * Return format can be overridden using the $format parameter.
 *
 * @since 1.2.0
 *
 * @param string $dateString The date to be converted, in the timezone of the site.
 * @param string $format      The format string for the returned date. Default 'Y-m-d H:i:s'.
 * @return string Formatted version of the date, in UTC.
 */
    public function getGmtFromDate(string $dateString, string $format = 'Y-m-d H:i:s'): string;
}
