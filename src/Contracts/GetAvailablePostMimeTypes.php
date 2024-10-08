<?php

namespace WpService\Contracts;

interface GetAvailablePostMimeTypes
{
    /**
 * Gets all available post MIME types for a given post type.
 *
 * @since 2.5.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $type
 * @return string[] An array of MIME types.
 */
    public function getAvailablePostMimeTypes(string $type = 'attachment'): array;
}
