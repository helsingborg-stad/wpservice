<?php

namespace WpService\Contracts;

interface GetUserCount
{
    /**
 * Returns the number of active users in your installation.
 *
 * Note that on a large site the count may be cached and only updated twice daily.
 *
 * @since MU (3.0.0)
 * @since 4.8.0 The `$network_id` parameter has been added.
 * @since 6.0.0 Moved to wp-includes/user.php.
 *
 * @param int|null $networkId ID of the network. Defaults to the current network.
 * @return int Number of active users on the network.
 */
    public function getUserCount(int|null $networkId = null): int;
}
