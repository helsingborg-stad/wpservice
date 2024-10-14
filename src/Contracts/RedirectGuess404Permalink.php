<?php

namespace WpService\Contracts;

interface RedirectGuess404Permalink
{
/**
 * Attempts to guess the correct URL for a 404 request based on query vars.
 *
 * @since 2.3.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @return string|false The correct URL if one is found. False on failure.
 */
    public function redirectGuess404Permalink(): string|false;
}
