<?php

namespace WpService\Contracts;

interface RestApiInit
{
    /**
     * Registers rewrite rules for the REST API.
     *
     * @since 4.4.0
     *
     * @see rest_api_register_rewrites()
     * @global WP $wp Current WordPress environment instance.
     */
    public function restApiInit(): void;
}
