<?php

namespace WpService\Contracts;

interface WpIsLargeUserCount
{
    /**
     * Determines whether the site has a large number of users.
     *
     * The default criteria for a large site is more than 10,000 users.
     *
     * @since 6.0.0
     *
     * @param int|null $networkId ID of the network. Defaults to the current network.
     * @return bool Whether the site has a large number of users.
     */
    public function wpIsLargeUserCount(int|null $networkId = null): bool;
}
