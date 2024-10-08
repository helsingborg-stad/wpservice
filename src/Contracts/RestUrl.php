<?php

namespace WpService\Contracts;

interface RestUrl
{
    /**
     * Retrieves the URL to a REST endpoint.
     *
     * Note: The returned URL is NOT escaped.
     *
     * @since 4.4.0
     *
     * @param string $path   Optional. REST route. Default empty.
     * @param string $scheme Optional. Sanitization scheme. Default 'rest'.
     * @return string Full URL to the endpoint.
     */
    public function restUrl(string $path = '', string $scheme = 'rest'): string;
}
