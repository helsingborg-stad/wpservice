<?php

namespace WpService\Contracts;

interface IsMainSite
{
    /**
 * Determines whether a site is the main site of the current network.
 *
 * @since 3.0.0
 * @since 4.9.0 The `$network_id` parameter was added.
 *
 * @param int $siteId    Optional. Site ID to test. Defaults to current site.
 * @param int $networkId Optional. Network ID of the network to check for.
 *                        Defaults to current network.
 * @return bool True if $site_id is the main site of the network, or if not
 *              running Multisite.
 */
    public function isMainSite(int $siteId = null, int $networkId = null): bool;
}
