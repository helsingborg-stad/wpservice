<?php

namespace WpService\Contracts;

interface WpUpdateNetworkCounts
{
    /**
 * Updates the network-wide counts for the current network.
 *
 * @since 3.1.0
 * @since 4.8.0 The `$network_id` parameter has been added.
 *
 * @param int|null $networkId ID of the network. Default is the current network.
 */
    public function wpUpdateNetworkCounts(int|null $networkId = null): void;
}
