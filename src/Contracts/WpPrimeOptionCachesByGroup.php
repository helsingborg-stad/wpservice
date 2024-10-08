<?php

namespace WpService\Contracts;

interface WpPrimeOptionCachesByGroup
{
    /**
     * Primes the cache of all options registered with a specific option group.
     *
     * @since 6.4.0
     *
     * @global array $new_allowed_options
     *
     * @param string $optionGroup The option group to load options for.
     */
    public function wpPrimeOptionCachesByGroup(string $optionGroup): void;
}
