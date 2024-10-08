<?php

namespace WpService\Contracts;

interface CanEditNetwork
{
    /**
     * Determines whether or not this network from this page can be edited.
     *
     * By default editing of network is restricted to the Network Admin for that `$network_id`.
     * This function allows for this to be overridden.
     *
     * @since 3.1.0
     *
     * @param int $networkId The network ID to check.
     * @return bool True if network can be edited, false otherwise.
     */
    public function canEditNetwork(int $networkId): bool;
}
