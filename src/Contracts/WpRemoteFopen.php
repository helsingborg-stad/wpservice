<?php

namespace WpService\Contracts;

interface WpRemoteFopen
{
    /**
     * HTTP request for URI to retrieve content.
     *
     * @since 1.5.1
     *
     * @see wp_safe_remote_get()
     *
     * @param string $uri URI/URL of web page to retrieve.
     * @return string|false HTTP content. False on failure.
     */
    public function wpRemoteFopen(string $uri): string|false;
}
