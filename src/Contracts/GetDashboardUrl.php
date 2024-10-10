<?php

namespace WpService\Contracts;

interface GetDashboardUrl
{
    /**
     * Retrieves the URL to the user's dashboard.
     *
     * If a user does not belong to any site, the global user dashboard is used. If the user
     * belongs to the current site, the dashboard for the current site is returned. If the user
     * cannot edit the current site, the dashboard to the user's primary site is returned.
     *
     * @since 3.1.0
     *
     * @param int $userId Optional. User ID. Defaults to current user.
     * @param string $path    Optional path relative to the dashboard. Use only paths known to
     *                        both site and user admins. Default empty.
     * @param string $scheme  The scheme to use. Default is 'admin', which obeys force_ssl_admin()
     *                        and is_ssl(). 'http' or 'https' can be passed to force those schemes.
     * @return string Dashboard URL link with optional path appended.
     */
    public function getDashboardUrl(int $userId, string $path = '', string $scheme = 'admin'): string;
}
