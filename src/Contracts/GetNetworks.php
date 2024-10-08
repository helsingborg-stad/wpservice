<?php

namespace WpService\Contracts;

interface GetNetworks
{
    /**
 * Retrieves a list of networks.
 *
 * @since 4.6.0
 *
 * @param string|array $args Optional. Array or string of arguments. See WP_Network_Query::parse_query()
 *                           for information on accepted arguments. Default empty array.
 * @return array|int List of WP_Network objects, a list of network IDs when 'fields' is set to 'ids',
 *                   or the number of networks when 'count' is passed as a query var.
 */
    public function getNetworks(string|array $args): array|int;
}
