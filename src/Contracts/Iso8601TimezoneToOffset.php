<?php

namespace WpService\Contracts;

interface Iso8601TimezoneToOffset
{
    /**
     * Given an ISO 8601 timezone, returns its UTC offset in seconds.
     *
     * @since 1.5.0
     *
     * @param string $timezone Either 'Z' for 0 offset or '±hhmm'.
     * @return int|float The offset in seconds.
     */
    public function iso8601TimezoneToOffset(string $timezone): int|float;
}
