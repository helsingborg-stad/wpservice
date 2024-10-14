<?php

namespace WpService\Contracts;

interface WpValidateSiteData
{
/**
 * Validates data for a site prior to inserting or updating in the database.
 *
 * @since 5.1.0
 *
 * @param \WP_Error $errors   Error object, passed by reference. Will contain validation errors if
 *                               any occurred.
 * @param array $data     Associative array of complete site data. See {@see wp_insert_site()}
 *                               for the included data.
 * @param \WP_Site|null $oldSite The old site object if the data belongs to a site being updated,
 *                               or null if it is a new site being inserted.
 */
    public function wpValidateSiteData(\WP_Error $errors, array $data, \WP_Site|null $oldSite = null): void;
}
