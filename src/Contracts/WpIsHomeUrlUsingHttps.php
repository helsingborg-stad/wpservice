<?php

namespace WpService\Contracts;

interface WpIsHomeUrlUsingHttps
{
/**
 * Checks whether the current site URL is using HTTPS.
 *
 * @since 5.7.0
 * @see home_url()
 *
 * @return bool True if using HTTPS, false otherwise.
 */
    public function wpIsHomeUrlUsingHttps(): bool;
}
