<?php

namespace WpService\Contracts;

interface WpCacheInit
{
/**
 * Sets up Object Cache Global and assigns it.
 *
 * @since 2.0.0
 *
 * @global WP_Object_Cache $wp_object_cache
 */
    public function wpCacheInit(): void;
}
