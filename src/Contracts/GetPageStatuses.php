<?php

namespace WpService\Contracts;

interface GetPageStatuses
{
    /**
 * Retrieves all of the WordPress support page statuses.
 *
 * Pages have a limited set of valid status values, this provides the
 * post_status values and descriptions.
 *
 * @since 2.5.0
 *
 * @return string[] Array of page status labels keyed by their status.
 */
    public function getPageStatuses(): array;
}
