<?php

namespace WpService\Contracts;

interface DeleteNetworkOption
{
    /**
     * Removes a network option by name.
     *
     * @since 4.4.0
     *
     * @see delete_option()
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param int $networkId ID of the network. Can be null to default to the current network ID.
     * @param string $option     Name of the option to delete. Expected to not be SQL-escaped.
     * @return bool True if the option was deleted, false otherwise.
     */
    public function deleteNetworkOption(int $networkId, string $option): bool;
}
