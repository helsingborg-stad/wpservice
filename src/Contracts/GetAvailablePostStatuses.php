<?php

namespace WpService\Contracts;

interface GetAvailablePostStatuses
{
    /**
 * Returns all the possible statuses for a post type.
 *
 * @since 2.5.0
 *
 * @param string $type The post_type you want the statuses for. Default 'post'.
 * @return string[] An array of all the statuses for the supplied post type.
 */
    public function getAvailablePostStatuses(string $type): array;
}
