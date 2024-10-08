<?php

namespace WpService\Contracts;

interface WpHttpSupports
{
    /**
 * Determines if there is an HTTP Transport that can process this request.
 *
 * @since 3.2.0
 *
 * @param array $capabilities Array of capabilities to test or a wp_remote_request() $args array.
 * @param string $url          Optional. If given, will check if the URL requires SSL and adds
 *                             that requirement to the capabilities array.
 *
 * @return bool
 */
    public function wpHttpSupports(array $capabilities = [], string $url = null): bool;
}
