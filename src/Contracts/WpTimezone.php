<?php

namespace WpService\Contracts;

interface WpTimezone
{
    /**
 * Retrieves the timezone of the site as a `DateTimeZone` object.
 *
 * Timezone can be based on a PHP timezone string or a ±HH:MM offset.
 *
 * @since 5.3.0
 *
 * @return \DateTimeZone Timezone object.
 */
    public function wpTimezone(): \DateTimeZone;
}
