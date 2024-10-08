<?php

namespace WpService\Contracts;

interface WpGuessUrl
{
    /**
 * Guesses the URL for the site.
 *
 * Will remove wp-admin links to retrieve only return URLs not in the wp-admin
 * directory.
 *
 * @since 2.6.0
 *
 * @return string The guessed URL.
 */
    public function wpGuessUrl(): string;
}
