<?php

namespace WpService\Contracts;

interface UpdateNetworkOption
{
    /**
     * Updates the value of a network option that was already added.
     *
     * @since 4.4.0
     *
     * @see update_option()
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param int $networkId ID of the network. Can be null to default to the current network ID.
     * @param string $option     Name of the option. Expected to not be SQL-escaped.
     * @param mixed $value      Option value. Expected to not be SQL-escaped.
     * @return bool True if the value was updated, false otherwise.
     */
    public function updateNetworkOption(int $networkId, string $option, mixed $value): bool;
}
