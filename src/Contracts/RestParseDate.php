<?php

namespace WpService\Contracts;

interface RestParseDate
{
    /**
     * Parses an RFC3339 time into a Unix timestamp.
     *
     * @since 4.4.0
     *
     * @param string $date      RFC3339 timestamp.
     * @param bool $forceUtc Optional. Whether to force UTC timezone instead of using
     *                          the timestamp's timezone. Default false.
     * @return int|false Unix timestamp on success, false on failure.
     */
    public function restParseDate(string $date, bool $forceUtc = false): int|false;
}
