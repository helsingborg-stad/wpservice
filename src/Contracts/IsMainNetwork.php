<?php

namespace WpService\Contracts;

interface IsMainNetwork
{
/**
 * Determines whether a network is the main network of the Multisite installation.
 *
 * @since 3.7.0
 *
 * @param int $networkId Optional. Network ID to test. Defaults to current network.
 * @return bool True if $network_id is the main network, or if not running Multisite.
 */
    public function isMainNetwork(int $networkId = null): bool;
}
