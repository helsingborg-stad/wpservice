<?php

namespace WpService\Contracts;

interface WpNormalizeSiteData
{
    /**
 * Normalizes data for a site prior to inserting or updating in the database.
 *
 * @since 5.1.0
 *
 * @param array $data Associative array of site data passed to the respective function.
 *                    See {@see wp_insert_site()} for the possibly included data.
 * @return array Normalized site data.
 */
    public function wpNormalizeSiteData(array $data): array;
}
