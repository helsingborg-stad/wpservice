<?php

namespace WpService\Contracts;

interface GetSiteMeta
{
/**
 * Retrieves metadata for a site.
 *
 * @since 5.1.0
 *
 * @param int $siteId Site ID.
 * @param string $key     Optional. The meta key to retrieve. By default,
 *                        returns data for all keys. Default empty.
 * @param bool $single  Optional. Whether to return a single value.
 *                        This parameter has no effect if `$key` is not specified.
 *                        Default false.
 * @return mixed An array of values if `$single` is false.
 *               The value of meta data field if `$single` is true.
 *               False for an invalid `$site_id` (non-numeric, zero, or negative value).
 *               An empty array if a valid but non-existing site ID is passed and `$single` is false.
 *               An empty string if a valid but non-existing site ID is passed and `$single` is true.
 *               Note: Non-serialized values are returned as strings:
 *               - false values are returned as empty strings ('')
 *               - true values are returned as '1'
 *               - numbers (both integer and float) are returned as strings
 *               Arrays and objects retain their original type.
 */
    public function getSiteMeta(int $siteId, string $key = '', bool $single = false): mixed;
}
