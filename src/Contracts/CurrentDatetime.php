<?php

namespace WpService\Contracts;

interface CurrentDatetime
{
    /**
 * Retrieves the current time as an object using the site's timezone.
 *
 * @since 5.3.0
 *
 * @return \DateTimeImmutable Date and time object.
 */
    public function currentDatetime(): \DateTimeImmutable;
}
