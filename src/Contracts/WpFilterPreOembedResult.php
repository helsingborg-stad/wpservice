<?php

namespace WpService\Contracts;

interface WpFilterPreOembedResult
{
/**
 * Filters the oEmbed result before any HTTP requests are made.
 *
 * If the URL belongs to the current site, the result is fetched directly instead of
 * going through the oEmbed discovery process.
 *
 * @since 4.5.3
 *
 * @param null|string $result The UNSANITIZED (and potentially unsafe) HTML that should be used to embed. Default null.
 * @param string $url    The URL that should be inspected for discovery `<link>` tags.
 * @param array $args   oEmbed remote get arguments.
 * @return null|string The UNSANITIZED (and potentially unsafe) HTML that should be used to embed.
 *                     Null if the URL does not belong to the current site.
 */
    public function wpFilterPreOembedResult(null|string $result, string $url, array $args): null|string;
}
