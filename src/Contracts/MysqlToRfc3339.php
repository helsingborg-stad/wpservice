<?php

namespace WpService\Contracts;

interface MysqlToRfc3339
{
/**
 * Parses and formats a MySQL datetime (Y-m-d H:i:s) for ISO8601 (Y-m-d\TH:i:s).
 *
 * Explicitly strips timezones, as datetimes are not saved with any timezone
 * information. Including any information on the offset could be misleading.
 *
 * Despite historical function name, the output does not conform to RFC3339 format,
 * which must contain timezone.
 *
 * @since 4.4.0
 *
 * @param string $dateString Date string to parse and format.
 * @return string Date formatted for ISO8601 without time zone.
 */
    public function mysqlToRfc3339(string $dateString): string;
}
