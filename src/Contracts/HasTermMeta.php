<?php

namespace WpService\Contracts;

interface HasTermMeta
{
    /**
 * Gets all meta data, including meta IDs, for the given term ID.
 *
 * @since 4.9.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int $termId Term ID.
 * @return array|false Array with meta data, or false when the meta table is not installed.
 */
    public function hasTermMeta(int $termId): array|false;
}
