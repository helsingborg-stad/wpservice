<?php

namespace WpService\Contracts;

interface WpmuNewSiteAdminNotification
{
    /**
     * Notifies the Multisite network administrator that a new site was created.
     *
     * Filter {@see 'send_new_site_email'} to disable or bypass.
     *
     * Filter {@see 'new_site_email'} to filter the contents.
     *
     * @since 5.6.0
     *
     * @param int $siteId Site ID of the new site.
     * @param int $userId User ID of the administrator of the new site.
     * @return bool Whether the email notification was sent.
     */
    public function wpmuNewSiteAdminNotification(int $siteId, int $userId): bool;
}
