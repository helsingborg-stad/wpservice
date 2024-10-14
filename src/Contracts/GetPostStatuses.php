<?php

namespace WpService\Contracts;

interface GetPostStatuses
{
/**
 * Retrieves all of the WordPress supported post statuses.
 *
 * Posts have a limited set of valid status values, this provides the
 * post_status values and descriptions.
 *
 * @since 2.5.0
 *
 * @return string[] Array of post status labels keyed by their status.
 */
    public function getPostStatuses(): array;
}
