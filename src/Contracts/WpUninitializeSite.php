<?php

namespace WpService\Contracts;

interface WpUninitializeSite
{
/**
 * Runs the uninitialization routine for a given site.
 *
 * This process includes dropping the site's database tables and deleting its uploads directory.
 *
 * @since 5.1.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int|\WP_Site $siteId Site ID or object.
 * @return true|\WP_Error True on success, or error object on failure.
 */
    public function wpUninitializeSite(int|\WP_Site $siteId): true|\WP_Error;
}
