<?php

namespace WpService\Contracts;

interface GetMainNetworkId
{
    /**
 * Gets the main network ID.
 *
 * @since 4.3.0
 *
 * @return int The ID of the main network.
 */
    public function getMainNetworkId(): int;
}
