<?php

namespace WpService\Contracts;

interface WpInitializeSite
{
    /**
     * Runs the initialization routine for a given site.
     *
     * This process includes creating the site's database tables and
     * populating them with defaults.
     *
     * @since 5.1.0
     *
     * @global wpdb     $wpdb     WordPress database abstraction object.
     * @global WP_Roles $wp_roles WordPress role management object.
     *
     * @param int|\WP_Site $siteId Site ID or object.
     * @param array $args    {
     *     Optional. Arguments to modify the initialization behavior.
     *
     * @type int    $user_id Required. User ID for the site administrator.
     * @type string $title   Site title. Default is 'Site %d' where %d is the
     *                           site ID.
     * @type array  $options Custom option $key => $value pairs to use. Default
     *                           empty array.
     * @type array  $meta    Custom site metadata $key => $value pairs to use.
     *                           Default empty array.
     * }
     * @return true|\WP_Error True on success, or error object on failure.
     */
    public function wpInitializeSite(int|\WP_Site $siteId, array $args = []): true|\WP_Error;
}
