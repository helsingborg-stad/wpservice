<?php

namespace WpService\Contracts;

interface WpOembedAddProvider
{
    /**
     * Adds a URL format and oEmbed provider URL pair.
     *
     * @since 2.9.0
     *
     * @see WP_oEmbed
     *
     * @param string $format   The format of URL that this provider can handle. You can use asterisks
     *                         as wildcards.
     * @param string $provider The URL to the oEmbed provider.
     * @param bool $regex    Optional. Whether the `$format` parameter is in a RegEx format. Default false.
     */
    public function wpOembedAddProvider(string $format, string $provider, bool $regex = false): void;
}
