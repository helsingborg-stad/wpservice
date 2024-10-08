<?php

namespace WpService\Contracts;

interface GetNetwork
{
    /**
 * Retrieves network data given a network ID or network object.
 *
 * Network data will be cached and returned after being passed through a filter.
 * If the provided network is empty, the current network global will be used.
 *
 * @since 4.6.0
 *
 * @global WP_Network $current_site
 *
 * @param \WP_Network|int|null $network Optional. Network to retrieve. Default is the current network.
 * @return \WP_Network|null The network object or null if not found.
 */
    public function getNetwork(\WP_Network|int|null $network): \WP_Network|null;
}
