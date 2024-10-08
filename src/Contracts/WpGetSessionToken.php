<?php

namespace WpService\Contracts;

interface WpGetSessionToken
{
    /**
     * Retrieves the current session token from the logged_in cookie.
     *
     * @since 4.0.0
     *
     * @return string Token.
     */
    public function wpGetSessionToken(): string;
}
