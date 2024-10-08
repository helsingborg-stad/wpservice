<?php

namespace WpService\Contracts;

interface GetCurrentNetworkId
{
    /**
     * Retrieves the current network ID.
     *
     * @since 4.6.0
     *
     * @return int The ID of the current network.
     */
    public function getCurrentNetworkId(): int;
}
