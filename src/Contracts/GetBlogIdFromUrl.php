<?php

namespace WpService\Contracts;

interface GetBlogIdFromUrl
{
/**
 * Gets a blog's numeric ID from its URL.
 *
 * On a subdirectory installation like example.com/blog1/,
 * $domain will be the root 'example.com' and $path the
 * subdirectory '/blog1/'. With subdomains like blog1.example.com,
 * $domain is 'blog1.example.com' and $path is '/'.
 *
 * @since MU (3.0.0)
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $domain Website domain.
 * @param string $path   Optional. Not required for subdomain installations. Default '/'.
 * @return int 0 if no blog found, otherwise the ID of the matching blog.
 */
    public function getBlogIdFromUrl(string $domain, string $path = '/'): int;
}
