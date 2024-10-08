<?php

namespace WpService\Contracts;

interface WpGetUsersWithNoRole
{
    /**
 * Gets the user IDs of all users with no role on this site.
 *
 * @since 4.4.0
 * @since 4.9.0 The `$site_id` parameter was added to support multisite.
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int|null $siteId Optional. The site ID to get users with no role for. Defaults to the current site.
 * @return string[] Array of user IDs as strings.
 */
    public function wpGetUsersWithNoRole(int|null $siteId): array;
}
