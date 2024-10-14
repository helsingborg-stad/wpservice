<?php

namespace WpService\Contracts;

interface WpPopulateBasicAuthFromAuthorizationHeader
{
/**
 * Populates the Basic Auth server details from the Authorization header.
 *
 * Some servers running in CGI or FastCGI mode don't pass the Authorization
 * header on to WordPress.  If it's been rewritten to the `HTTP_AUTHORIZATION` header,
 * fill in the proper $_SERVER variables instead.
 *
 * @since 5.6.0
 */
    public function wpPopulateBasicAuthFromAuthorizationHeader(): void;
}
