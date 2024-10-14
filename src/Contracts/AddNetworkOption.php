<?php

namespace WpService\Contracts;

interface AddNetworkOption
{
/**
 * Adds a new network option.
 *
 * Existing options will not be updated.
 *
 * @since 4.4.0
 *
 * @see add_option()
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int $networkId ID of the network. Can be null to default to the current network ID.
 * @param string $option     Name of the option to add. Expected to not be SQL-escaped.
 * @param mixed $value      Option value, can be anything. Expected to not be SQL-escaped.
 * @return bool True if the option was added, false otherwise.
 */
    public function addNetworkOption(int $networkId, string $option, mixed $value): bool;
}
