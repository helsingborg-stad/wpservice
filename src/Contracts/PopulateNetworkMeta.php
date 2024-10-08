<?php

namespace WpService\Contracts;

interface PopulateNetworkMeta
{
    /**
 * Creates WordPress network meta and sets the default values.
 *
 * @since 5.1.0
 *
 * @global wpdb $wpdb          WordPress database abstraction object.
 * @global int  $wp_db_version WordPress database version.
 *
 * @param int $networkId Network ID to populate meta for.
 * @param array $meta       Optional. Custom meta $key => $value pairs to use. Default empty array.
 */
    public function populateNetworkMeta(int $networkId, array $meta): void;
}
