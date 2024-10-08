<?php

namespace WpService\Contracts;

interface CountUsers
{
    /**
     * Counts number of users who have each of the user roles.
     *
     * Assumes there are neither duplicated nor orphaned capabilities meta_values.
     * Assumes role names are unique phrases. Same assumption made by WP_User_Query::prepare_query()
     * Using $strategy = 'time' this is CPU-intensive and should handle around 10^7 users.
     * Using $strategy = 'memory' this is memory-intensive and should handle around 10^5 users, but see WP Bug #12257.
     *
     * @since 3.0.0
     * @since 4.4.0 The number of users with no role is now included in the `none` element.
     * @since 4.9.0 The `$site_id` parameter was added to support multisite.
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param string $strategy Optional. The computational strategy to use when counting the users.
     *                           Accepts either 'time' or 'memory'. Default 'time'.
     * @param int|null $siteId  Optional. The site ID to count users for. Defaults to the current site.
     * @return array {
     *     User counts.
     *
     * @type int   $total_users Total number of users on the site.
     * @type int[] $avail_roles Array of user counts keyed by user role.
     * }
     */
    public function countUsers(string $strategy = 'time', int|null $siteId = null): array;
}
