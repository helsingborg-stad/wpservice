<?php

namespace WpService\Contracts;

interface NetworkDomainCheck
{
    /**
     * Check for an existing network.
     *
     * @since 3.0.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @return string|false Base domain if network exists, otherwise false.
     */
    public function networkDomainCheck(): string|false;
}
