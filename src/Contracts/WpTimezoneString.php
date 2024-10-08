<?php

namespace WpService\Contracts;

interface WpTimezoneString
{
    /**
     * Retrieves the timezone of the site as a string.
     *
     * Uses the `timezone_string` option to get a proper timezone name if available,
     * otherwise falls back to a manual UTC ± offset.
     *
     * Example return values:
     *
     *  - 'Europe/Rome'
     *  - 'America/North_Dakota/New_Salem'
     *  - 'UTC'
     *  - '-06:30'
     *  - '+00:00'
     *  - '+08:45'
     *
     * @since 5.3.0
     *
     * @return string PHP timezone name or a ±HH:MM offset.
     */
    public function wpTimezoneString(): string;
}
