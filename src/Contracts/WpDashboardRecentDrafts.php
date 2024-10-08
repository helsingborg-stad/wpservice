<?php

namespace WpService\Contracts;

interface WpDashboardRecentDrafts
{
    /**
 * Show recent drafts of the user on the dashboard.
 *
 * @since 2.7.0
 *
 * @param WP_Post[]|false $drafts Optional. Array of posts to display. Default false.
 */
    public function wpDashboardRecentDrafts(array|false $drafts): void;
}
