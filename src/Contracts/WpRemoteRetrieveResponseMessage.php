<?php

namespace WpService\Contracts;

interface WpRemoteRetrieveResponseMessage
{
    /**
 * Retrieves only the response message from the raw response.
 *
 * Will return an empty string if incorrect parameter value is given.
 *
 * @since 2.7.0
 *
 * @param array|\WP_Error $response HTTP response.
 * @return string The response message. Empty string if incorrect parameter given.
 */
    public function wpRemoteRetrieveResponseMessage(array|\WP_Error $response): string;
}
