<?php

namespace WpService\Contracts;

interface WpIsLargeNetwork
{
    /**
 * Determines whether or not we have a large network.
 *
 * The default criteria for a large network is either more than 10,000 users or more than 10,000 sites.
 * Plugins can alter this criteria using the {@see 'wp_is_large_network'} filter.
 *
 * @since 3.3.0
 * @since 4.8.0 The `$network_id` parameter has been added.
 *
 * @param string $using      'sites' or 'users'. Default is 'sites'.
 * @param int|null $networkId ID of the network. Default is the current network.
 * @return bool True if the network meets the criteria for large. False otherwise.
 */
    public function wpIsLargeNetwork(string $using = 'sites', int|null $networkId = null): bool;
}
