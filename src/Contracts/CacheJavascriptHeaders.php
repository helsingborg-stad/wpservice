<?php

namespace WpService\Contracts;

interface CacheJavascriptHeaders
{
/**
 * Sets the HTTP headers for caching for 10 days with JavaScript content type.
 *
 * @since 2.1.0
 */
    public function cacheJavascriptHeaders(): void;
}
