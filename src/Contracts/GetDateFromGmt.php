<?php

namespace WpService\Contracts;

interface GetDateFromGmt
{
    /**
     * Given a date in UTC or GMT timezone, returns that date in the timezone of the site.
     *
     * Requires a date in the Y-m-d H:i:s format.
     * Default return format of 'Y-m-d H:i:s' can be overridden using the `$format` parameter.
     *
     * @since 1.2.0
     *
     * @param string $dateString The date to be converted, in UTC or GMT timezone.
     * @param string $format      The format string for the returned date. Default 'Y-m-d H:i:s'.
     * @return string Formatted version of the date, in the site's timezone.
     */
    public function getDateFromGmt(string $dateString, string $format = 'Y-m-d H:i:s'): string;
}
