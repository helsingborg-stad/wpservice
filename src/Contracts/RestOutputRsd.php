<?php

namespace WpService\Contracts;

interface RestOutputRsd
{
    /**
 * Adds the REST API URL to the WP RSD endpoint.
 *
 * @since 4.4.0
 *
 * @see get_rest_url()
 */
    public function restOutputRsd(): void;
}
