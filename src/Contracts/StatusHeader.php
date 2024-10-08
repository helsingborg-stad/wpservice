<?php

namespace WpService\Contracts;

interface StatusHeader
{
    /**
 * Sets HTTP status header.
 *
 * @since 2.0.0
 * @since 4.4.0 Added the `$description` parameter.
 *
 * @see get_status_header_desc()
 *
 * @param int $code        HTTP status code.
 * @param string $description Optional. A custom description for the HTTP status.
 *                            Defaults to the result of get_status_header_desc() for the given code.
 */
    public function statusHeader(int $code, string $description): void;
}
