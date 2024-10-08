<?php

namespace WpService\Contracts;

interface WpOembedGet
{
    /**
     * Attempts to fetch the embed HTML for a provided URL using oEmbed.
     *
     * @since 2.9.0
     *
     * @see WP_oEmbed
     *
     * @param string $url  The URL that should be embedded.
     * @param array|string $args {
     *     Optional. Additional arguments for retrieving embed HTML. Default empty.
     *
     * @type int|string $width    Optional. The `maxwidth` value passed to the provider URL.
     * @type int|string $height   Optional. The `maxheight` value passed to the provider URL.
     * @type bool       $discover Optional. Determines whether to attempt to discover link tags
     *                                at the given URL for an oEmbed provider when the provider URL
     *                                is not found in the built-in providers list. Default true.
     * }
     * @return string|false The embed HTML on success, false on failure.
     */
    public function wpOembedGet(string $url, array|string $args = ''): string|false;
}
