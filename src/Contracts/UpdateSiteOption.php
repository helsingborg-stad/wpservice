<?php

namespace WpService\Contracts;

interface UpdateSiteOption
{
/**
 * Updates the value of an option that was already added for the current network.
 *
 * @since 2.8.0
 * @since 4.4.0 Modified into wrapper for update_network_option()
 *
 * @see update_network_option()
 *
 * @param string $option Name of the option. Expected to not be SQL-escaped.
 * @param mixed $value  Option value. Expected to not be SQL-escaped.
 * @return bool True if the value was updated, false otherwise.
 */
    public function updateSiteOption(string $option, mixed $value): bool;
}
