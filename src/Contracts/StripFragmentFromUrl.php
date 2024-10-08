<?php

namespace WpService\Contracts;

interface StripFragmentFromUrl
{
    /**
     * Strips the #fragment from a URL, if one is present.
     *
     * @since 4.4.0
     *
     * @param string $url The URL to strip.
     * @return string The altered URL.
     */
    public function stripFragmentFromUrl(string $url): string;
}
