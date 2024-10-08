<?php

namespace WpService\Contracts;

interface EscUrl
{
    /**
     * Checks and cleans a URL.
     *
     * A number of characters are removed from the URL. If the URL is for displaying
     * (the default behavior) ampersands are also replaced. The {@see 'clean_url'} filter
     * is applied to the returned cleaned URL.
     *
     * @since 2.8.0
     *
     * @param string $url       The URL to be cleaned.
     * @param string[] $protocols Optional. An array of acceptable protocols.
     *                            Defaults to return value of wp_allowed_protocols().
     * @param string $context  Private. Use sanitize_url() for database usage.
     * @return string The cleaned URL after the {@see 'clean_url'} filter is applied.
     *                An empty string is returned if `$url` specifies a protocol other than
     *                those in `$protocols`, or if `$url` contains an empty string.
     */
    public function escUrl(string $url, array $protocols = null, string $context = 'display'): string;
}
