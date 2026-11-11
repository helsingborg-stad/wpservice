<?php

namespace WpService\Contracts;

interface EscUrlRaw
{
/**
 * Sanitizes a URL for database or redirect usage.
 *
 * This function is an alias for sanitize_url().
 *
 * @since 2.8.0
 * @since 6.1.0 Turned into an alias for sanitize_url().
 * @since 6.9.0 Prepends `https://` to the URL if it does not already contain a scheme
 *              and the first item in `$protocols` is 'https'.
 *
 * @see sanitize_url()
 *
 * @param string $url       The URL to be cleaned.
 * @param string[] $protocols Optional. An array of acceptable protocols.
 *                            Defaults to return value of wp_allowed_protocols().
 * @return string The cleaned URL after sanitize_url() is run.
 */
    public function escUrlRaw(string $url, array|null $protocols = null): string;
}
