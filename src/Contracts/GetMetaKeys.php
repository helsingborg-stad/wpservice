<?php

namespace WpService\Contracts;

interface GetMetaKeys
{
    /**
 * Returns a list of previously defined keys.
 *
 * @since 1.2.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @return string[] Array of meta key names.
 */
    public function getMetaKeys(): array;
}
