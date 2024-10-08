<?php

namespace WpService\Contracts;

interface WpMaybeUpdateNetworkSiteCounts
{
    /**
     * Updates the count of sites for the current network.
     *
     * If enabled through the {@see 'enable_live_network_counts'} filter, update the sites count
     * on a network when a site is created or its status is updated.
     *
     * @since 3.7.0
     * @since 4.8.0 The `$network_id` parameter has been added.
     *
     * @param int|null $networkId ID of the network. Default is the current network.
     */
    public function wpMaybeUpdateNetworkSiteCounts(int|null $networkId = null): void;
}
