<?php

namespace WpService\Contracts;

interface WpUpdateNetworkUserCounts
{
    /**
 * Updates the network-wide user count.
 *
 * @since 3.7.0
 * @since 4.8.0 The `$network_id` parameter has been added.
 * @since 6.0.0 This function is now a wrapper for wp_update_user_counts().
 *
 * @param int|null $networkId ID of the network. Default is the current network.
 */
    public function wpUpdateNetworkUserCounts(int|null $networkId): void;
}
