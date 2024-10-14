<?php

namespace WpService\Contracts;

interface WpPrimeNetworkOptionCaches
{
/**
 * Primes specific network options into the cache with a single database query.
 *
 * Only network options that do not already exist in cache will be loaded.
 *
 * If site is not multisite, then call wp_prime_option_caches().
 *
 * @since 6.6.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int $networkId ID of the network. Can be null to default to the current network ID.
 * @param string[] $options    An array of option names to be loaded.
 */
    public function wpPrimeNetworkOptionCaches(int $networkId, array $options): void;
}
