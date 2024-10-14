<?php

namespace WpService\Contracts;

interface WpPrimeOptionCaches
{
/**
 * Primes specific options into the cache with a single database query.
 *
 * Only options that do not already exist in cache will be loaded.
 *
 * @since 6.4.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string[] $options An array of option names to be loaded.
 */
    public function wpPrimeOptionCaches(array $options): void;
}
