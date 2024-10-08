<?php

namespace WpService\Contracts;

interface WpMaybeUpdateUserCounts
{
    /**
     * Updates the total count of users on the site if live user counting is enabled.
     *
     * @since 6.0.0
     *
     * @param int|null $networkId ID of the network. Defaults to the current network.
     * @return bool Whether the update was successful.
     */
    public function wpMaybeUpdateUserCounts(int|null $networkId = null): bool;
}
