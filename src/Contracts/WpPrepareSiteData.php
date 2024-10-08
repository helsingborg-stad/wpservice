<?php

namespace WpService\Contracts;

interface WpPrepareSiteData
{
    /**
 * Prepares site data for insertion or update in the database.
 *
 * @since 5.1.0
 *
 * @param array $data     Associative array of site data passed to the respective function.
 *                               See {@see wp_insert_site()} for the possibly included data.
 * @param array $defaults Site data defaults to parse $data against.
 * @param \WP_Site|null $oldSite Optional. Old site object if an update, or null if an insertion.
 *                               Default null.
 * @return array|\WP_Error Site data ready for a database transaction, or WP_Error in case a validation
 *                        error occurred.
 */
    public function wpPrepareSiteData(array $data, array $defaults, \WP_Site|null $oldSite = null): array|\WP_Error;
}
