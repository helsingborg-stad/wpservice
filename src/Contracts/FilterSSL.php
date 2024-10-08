<?php

namespace WpService\Contracts;

interface FilterSSL
{
    /**
     * Formats a URL to use https.
     *
     * Useful as a filter.
     *
     * @since 2.8.5
     *
     * @param string $url URL.
     * @return string URL with https as the scheme.
     */
    public function filterSSL(string $url): string;
}
