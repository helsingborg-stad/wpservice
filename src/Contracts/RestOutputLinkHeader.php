<?php

namespace WpService\Contracts;

interface RestOutputLinkHeader
{
/**
 * Sends a Link header for the REST API.
 *
 * @since 4.4.0
 */
    public function restOutputLinkHeader(): void;
}
