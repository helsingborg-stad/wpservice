<?php

namespace WpService\Contracts;

interface WpUpdateUserCounts
{
    /**
 * Updates the total count of users on the site.
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 * @since 6.0.0
 *
 * @param int|null $networkId ID of the network. Defaults to the current network.
 * @return bool Whether the update was successful.
 */
    public function wpUpdateUserCounts(int|null $networkId): bool;
}
