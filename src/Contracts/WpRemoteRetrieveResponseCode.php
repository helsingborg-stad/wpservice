<?php

namespace WpService\Contracts;

interface WpRemoteRetrieveResponseCode
{
    /**
     * Retrieves only the response code from the raw response.
     *
     * Will return an empty string if incorrect parameter value is given.
     *
     * @since 2.7.0
     *
     * @param array|\WP_Error $response HTTP response.
     * @return int|string The response code as an integer. Empty string if incorrect parameter given.
     */
    public function wpRemoteRetrieveResponseCode(array|\WP_Error $response): int|string;
}
