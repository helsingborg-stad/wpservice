<?php

namespace WpService\Contracts;

interface RestApiLoaded
{
    /**
 * Loads the REST API.
 *
 * @since 4.4.0
 *
 * @global WP $wp Current WordPress environment instance.
 */
    public function restApiLoaded(): void;
}
