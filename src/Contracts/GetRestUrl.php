<?php

namespace WpService\Contracts;

interface GetRestUrl
{
    /**
 * Retrieves the URL to a REST endpoint on a site.
 *
 * Note: The returned URL is NOT escaped.
 *
 * @since 4.4.0
 *
 * @todo Check if this is even necessary
 * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
 *
 * @param int|null $blogId Optional. Blog ID. Default of null returns URL for current blog.
 * @param string $path    Optional. REST route. Default '/'.
 * @param string $scheme  Optional. Sanitization scheme. Default 'rest'.
 * @return string Full URL to the endpoint.
 */
    public function getRestUrl(int|null $blogId, string $path, string $scheme): string;
}
