<?php

namespace WpService\Contracts;

interface WpLoadCoreSiteOptions
{
/**
 * Loads and primes caches of certain often requested network options if is_multisite().
 *
 * @since 3.0.0
 * @since 6.3.0 Also prime caches for network options when persistent object cache is enabled.
 * @since 6.6.0 Uses wp_prime_network_option_caches().
 *
 * @param int $networkId Optional. Network ID of network for which to prime network options cache. Defaults to current network.
 */
    public function wpLoadCoreSiteOptions(int $networkId = null): void;
}
