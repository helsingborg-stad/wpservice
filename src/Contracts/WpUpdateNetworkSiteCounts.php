<?php

namespace WpService\Contracts;

interface WpUpdateNetworkSiteCounts
{
    /**
 * Updates the network-wide site count.
 *
 * @since 3.7.0
 * @since 4.8.0 The `$network_id` parameter has been added.
 *
 * @param int|null $networkId ID of the network. Default is the current network.
 */
    public function wpUpdateNetworkSiteCounts(int|null $networkId): void;
}
