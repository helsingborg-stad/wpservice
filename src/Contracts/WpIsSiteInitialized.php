<?php

namespace WpService\Contracts;

interface WpIsSiteInitialized
{
/**
 * Checks whether a site is initialized.
 *
 * A site is considered initialized when its database tables are present.
 *
 * @since 5.1.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int|\WP_Site $siteId Site ID or object.
 * @return bool True if the site is initialized, false otherwise.
 */
    public function wpIsSiteInitialized(int|\WP_Site $siteId): bool;
}
