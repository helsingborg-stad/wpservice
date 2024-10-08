<?php

namespace WpService\Contracts;

interface WpGetReferer
{
    /**
     * Retrieves referer from '_wp_http_referer' or HTTP referer.
     *
     * If it's the same as the current request URL, will return false.
     *
     * @since 2.0.4
     *
     * @return string|false Referer URL on success, false on failure.
     */
    public function wpGetReferer(): string|false;
}
