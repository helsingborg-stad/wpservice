<?php

namespace WpService\Contracts;

interface GetAllPageIds
{
    /**
 * Gets a list of page IDs.
 *
 * @since 2.0.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @return string[] List of page IDs as strings.
 */
    public function getAllPageIds(): array;
}
