<?php

namespace WpService\Contracts;

interface LinksAddBaseUrl
{
    /**
 * Adds a base URL to relative links in passed content.
 *
 * By default, this function supports the 'src' and 'href' attributes.
 * However, this can be modified via the `$attrs` parameter.
 *
 * @since 2.7.0
 *
 * @global string $_links_add_base
 *
 * @param string $content String to search for links in.
 * @param string $base    The base URL to prefix to links.
 * @param array $attrs   The attributes which should be processed.
 * @return string The processed content.
 */
    public function linksAddBaseUrl(string $content, string $base, array $attrs): string;
}
