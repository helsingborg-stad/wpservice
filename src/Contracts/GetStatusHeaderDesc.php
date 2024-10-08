<?php

namespace WpService\Contracts;

interface GetStatusHeaderDesc
{
    /**
     * Retrieves the description for the HTTP status.
     *
     * @since 2.3.0
     * @since 3.9.0 Added status codes 418, 428, 429, 431, and 511.
     * @since 4.5.0 Added status codes 308, 421, and 451.
     * @since 5.1.0 Added status code 103.
     * @since 6.6.0 Added status code 425.
     *
     * @global array $wp_header_to_desc
     *
     * @param int $code HTTP status code.
     * @return string Status description if found, an empty string otherwise.
     */
    public function getStatusHeaderDesc(int $code): string;
}
