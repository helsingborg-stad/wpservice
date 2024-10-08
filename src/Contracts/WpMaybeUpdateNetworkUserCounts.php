<?php

namespace WpService\Contracts;

interface WpMaybeUpdateNetworkUserCounts
{
    /**
 * Updates the network-wide users count.
 *
 * If enabled through the {@see 'enable_live_network_counts'} filter, update the users count
 * on a network when a user is created or its status is updated.
 *
 * @since 3.7.0
 * @since 4.8.0 The `$network_id` parameter has been added.
 *
 * @param int|null $networkId ID of the network. Default is the current network.
 */
    public function wpMaybeUpdateNetworkUserCounts(int|null $networkId = null): void;
}
