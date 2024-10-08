<?php

namespace WpService\Contracts;

interface WpPrimeSiteOptionCaches
{
    /**
 * Primes specific network options for the current network into the cache with a single database query.
 *
 * Only network options that do not already exist in cache will be loaded.
 *
 * If site is not multisite, then call wp_prime_option_caches().
 *
 * @since 6.6.0
 *
 * @see wp_prime_network_option_caches()
 *
 * @param string[] $options An array of option names to be loaded.
 */
    public function wpPrimeSiteOptionCaches(array $options): void;
}
