<?php

namespace WpService\Contracts;

interface WpUpdateSite
{
    /**
     * Updates a site in the database.
     *
     * @since 5.1.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param int $siteId ID of the site that should be updated.
     * @param array $data    Site data to update. See {@see wp_insert_site()} for the list of supported keys.
     * @return int|\WP_Error The updated site's ID on success, or error object on failure.
     */
    public function wpUpdateSite(int $siteId, array $data): int|\WP_Error;
}
