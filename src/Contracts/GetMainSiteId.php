<?php

namespace WpService\Contracts;

interface GetMainSiteId
{
    /**
 * Gets the main site ID.
 *
 * @since 4.9.0
 *
 * @param int $networkId Optional. The ID of the network for which to get the main site.
 *                        Defaults to the current network.
 * @return int The ID of the main site.
 */
    public function getMainSiteId(int $networkId): int;
}
