<?php

namespace WpService\Contracts;

interface Iso8601ToDatetime
{
    /**
 * Given an ISO 8601 (Ymd\TH:i:sO) date, returns a MySQL DateTime (Y-m-d H:i:s) format used by post_date[_gmt].
 *
 * @since 1.5.0
 *
 * @param string $dateString Date and time in ISO 8601 format {@link https://en.wikipedia.org/wiki/ISO_8601}.
 * @param string $timezone    Optional. If set to 'gmt' returns the result in UTC. Default 'user'.
 * @return string|false The date and time in MySQL DateTime format - Y-m-d H:i:s, or false on failure.
 */
    public function iso8601ToDatetime(string $dateString, string $timezone = 'user'): string|false;
}
