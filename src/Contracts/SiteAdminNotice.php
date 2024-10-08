<?php

namespace WpService\Contracts;

interface SiteAdminNotice
{
    /**
     * Displays an admin notice to upgrade all sites after a core upgrade.
     *
     * @since 3.0.0
     *
     * @global int    $wp_db_version WordPress database version.
     * @global string $pagenow       The filename of the current screen.
     *
     * @return void|false Void on success. False if the current user is not a super admin.
     */
    public function siteAdminNotice(): mixed;
}
