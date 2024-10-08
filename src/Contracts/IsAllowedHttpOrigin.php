<?php

namespace WpService\Contracts;

interface IsAllowedHttpOrigin
{
    /**
     * Determines if the HTTP origin is an authorized one.
     *
     * @since 3.4.0
     *
     * @param string|null $origin Origin URL. If not provided, the value of get_http_origin() is used.
     * @return string Origin URL if allowed, empty string if not.
     */
    public function isAllowedHttpOrigin(string|null $origin = null): string;
}
