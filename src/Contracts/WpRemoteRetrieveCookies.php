<?php

namespace WpService\Contracts;

interface WpRemoteRetrieveCookies
{
    /**
     * Retrieves only the cookies from the raw response.
     *
     * @since 4.4.0
     *
     * @param array|\WP_Error $response HTTP response.
     * @return WP_Http_Cookie[] An array of `WP_Http_Cookie` objects from the response.
     *                          Empty array if there are none, or the response is a WP_Error.
     */
    public function wpRemoteRetrieveCookies(array|\WP_Error $response): array;
}
