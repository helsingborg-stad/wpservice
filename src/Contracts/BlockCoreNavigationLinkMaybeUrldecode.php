<?php

namespace WpService\Contracts;

interface BlockCoreNavigationLinkMaybeUrldecode
{
    /**
     * Decodes a url if it's encoded, returning the same url if not.
     *
     * @since 6.2.0
     *
     * @param string $url The url to decode.
     *
     * @return string $url Returns the decoded url.
     */
    public function blockCoreNavigationLinkMaybeUrldecode(string $url): string;
}
