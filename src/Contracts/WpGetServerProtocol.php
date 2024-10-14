<?php

namespace WpService\Contracts;

interface WpGetServerProtocol
{
/**
 * Returns the HTTP protocol sent by the server.
 *
 * @since 4.4.0
 *
 * @return string The HTTP protocol. Default: HTTP/1.0.
 */
    public function wpGetServerProtocol(): string;
}
