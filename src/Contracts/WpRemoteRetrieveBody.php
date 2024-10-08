<?php

namespace WpService\Contracts;

interface WpRemoteRetrieveBody
{
    /**
     * Retrieves only the body from the raw response.
     *
     * @since 2.7.0
     *
     * @param array|\WP_Error $response HTTP response.
     * @return string The body of the response. Empty string if no body or incorrect parameter given.
     */
    public function wpRemoteRetrieveBody(array|\WP_Error $response): string;
}
