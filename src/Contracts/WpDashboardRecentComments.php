<?php

namespace WpService\Contracts;

interface WpDashboardRecentComments
{
    /**
 * Show Comments section.
 *
 * @since 3.8.0
 *
 * @param int $totalItems Optional. Number of comments to query. Default 5.
 * @return bool False if no comments were found. True otherwise.
 */
    public function wpDashboardRecentComments(int $totalItems = 5): bool;
}
