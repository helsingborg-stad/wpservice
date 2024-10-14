<?php

namespace WpService\Contracts;

interface IsSiteMetaSupported
{
/**
 * Determines whether site meta is enabled.
 *
 * This function checks whether the 'blogmeta' database table exists. The result is saved as
 * a setting for the main network, making it essentially a global setting. Subsequent requests
 * will refer to this setting instead of running the query.
 *
 * @since 5.1.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @return bool True if site meta is supported, false otherwise.
 */
    public function isSiteMetaSupported(): bool;
}
