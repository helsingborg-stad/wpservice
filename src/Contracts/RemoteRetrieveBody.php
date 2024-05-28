<?php

namespace WpService\Contracts;

use WP_Error;

interface RemoteRetrieveBody
{
    /**
     * Retrieve only the body from the raw response.
     * @see https://developer.wordpress.org/reference/functions/wp_remote_retrieve_body/
     *
     * @param array|WP_Error $response HTTP response.
     * @return string The body of the response. Empty string if no body or incorrect parameter given.
     */
    public function remoteRetrieveBody(array|WP_Error $response): string;
}
