<?php

namespace WpService\Contracts;

interface GetCustomHeader
{
    /**
 * Gets the header image data.
 *
 * @since 3.4.0
 *
 * @global array $_wp_default_headers
 *
 * @return object
 */
    public function getCustomHeader(): object;
}
