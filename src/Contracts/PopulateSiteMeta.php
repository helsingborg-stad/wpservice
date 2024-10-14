<?php

namespace WpService\Contracts;

interface PopulateSiteMeta
{
/**
 * Creates WordPress site meta and sets the default values.
 *
 * @since 5.1.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int $siteId Site ID to populate meta for.
 * @param array $meta    Optional. Custom meta $key => $value pairs to use. Default empty array.
 */
    public function populateSiteMeta(int $siteId, array $meta = []): void;
}
