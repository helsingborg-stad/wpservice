<?php

namespace WpService\Contracts;

interface RestGetDateWithGmt
{
    /**
 * Parses a date into both its local and UTC equivalent, in MySQL datetime format.
 *
 * @since 4.4.0
 *
 * @see rest_parse_date()
 *
 * @param string $date   RFC3339 timestamp.
 * @param bool $isUtc Whether the provided date should be interpreted as UTC. Default false.
 * @return array|null {
 *     Local and UTC datetime strings, in MySQL datetime format (Y-m-d H:i:s),
 *     null on failure.
 *
 *     @type string $0 Local datetime string.
 *     @type string $1 UTC datetime string.
 * }
 */
    public function restGetDateWithGmt(string $date, bool $isUtc): array|null;
}
