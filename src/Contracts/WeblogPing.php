<?php

namespace WpService\Contracts;

interface WeblogPing
{
    /**
     * Sends a pingback.
     *
     * @since 1.2.0
     *
     * @param string $server Host of blog to connect to.
     * @param string $path Path to send the ping.
     */
    public function weblogPing(string $server = '', string $path = ''): void;
}
