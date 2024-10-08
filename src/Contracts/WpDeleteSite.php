<?php

namespace WpService\Contracts;

interface WpDeleteSite
{
    /**
     * Deletes a site from the database.
     *
     * @since 5.1.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param int $siteId ID of the site that should be deleted.
     * @return \WP_Site|\WP_Error The deleted site object on success, or error object on failure.
     */
    public function wpDeleteSite(int $siteId): \WP_Site|\WP_Error;
}
