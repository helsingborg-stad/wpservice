<?php

namespace WpService\Contracts;

interface RestOutputLinkWpHead
{
    /**
 * Outputs the REST API link tag into page header.
 *
 * @since 4.4.0
 *
 * @see get_rest_url()
 */
    public function restOutputLinkWpHead(): void;
}
