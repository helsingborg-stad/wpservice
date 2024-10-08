<?php

namespace WpService\Contracts;

interface RestIsIpAddress
{
    /**
     * Determines if an IP address is valid.
     *
     * Handles both IPv4 and IPv6 addresses.
     *
     * @since 4.7.0
     *
     * @param string $ip IP address.
     * @return string|false The valid IP address, otherwise false.
     */
    public function restIsIpAddress(string $ip): string|false;
}
