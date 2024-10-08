<?php

namespace WpService\Contracts;

interface GetOembedEndpointUrl
{
    /**
     * Retrieves the oEmbed endpoint URL for a given permalink.
     *
     * Pass an empty string as the first argument to get the endpoint base URL.
     *
     * @since 4.4.0
     *
     * @param string $permalink Optional. The permalink used for the `url` query arg. Default empty.
     * @param string $format    Optional. The requested response format. Default 'json'.
     * @return string The oEmbed endpoint URL.
     */
    public function getOembedEndpointUrl(string $permalink = '', string $format = 'json'): string;
}
