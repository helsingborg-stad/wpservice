<?php

namespace WpService\Contracts;

interface GetNetworkOption
{
    /**
     * Retrieves a network's option value based on the option name.
     *
     * @since 4.4.0
     *
     * @see get_option()
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param int $networkId    ID of the network. Can be null to default to the current network ID.
     * @param string $option        Name of the option to retrieve. Expected to not be SQL-escaped.
     * @param mixed $defaultValue Optional. Value to return if the option doesn't exist. Default false.
     * @return mixed Value set for the option.
     */
    public function getNetworkOption(int $networkId, string $option, mixed $defaultValue = false): mixed;
}
