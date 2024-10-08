<?php

namespace WpService\Contracts;

interface WpUniquePrefixedId
{
    /**
 * Generates an incremental ID that is independent per each different prefix.
 *
 * It is similar to `wp_unique_id`, but each prefix has its own internal ID
 * counter to make each prefix independent from each other. The ID starts at 1
 * and increments on each call. The returned value is not universally unique,
 * but it is unique across the life of the PHP process and it's stable per
 * prefix.
 *
 * @since 6.4.0
 *
 * @param string $prefix Optional. Prefix for the returned ID. Default empty string.
 * @return string Incremental ID per prefix.
 */
    public function wpUniquePrefixedId(string $prefix = ''): string;
}
