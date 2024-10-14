<?php

namespace WpService\Contracts;

interface GetSiteOption
{
/**
 * Retrieve an option value for the current network based on name of option.
 *
 * @since 2.8.0
 * @since 4.4.0 The `$use_cache` parameter was deprecated.
 * @since 4.4.0 Modified into wrapper for get_network_option()
 *
 * @see get_network_option()
 *
 * @param string $option        Name of the option to retrieve. Expected to not be SQL-escaped.
 * @param mixed $defaultValue Optional. Value to return if the option doesn't exist. Default false.
 * @param bool $deprecated    Whether to use cache. Multisite only. Always set to true.
 * @return mixed Value set for the option.
 */
    public function getSiteOption(string $option, mixed $defaultValue = false, bool $deprecated = true): mixed;
}
