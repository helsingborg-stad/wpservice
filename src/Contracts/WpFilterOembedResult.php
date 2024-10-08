<?php

namespace WpService\Contracts;

interface WpFilterOembedResult
{
    /**
 * Filters the given oEmbed HTML.
 *
 * If the `$url` isn't on the trusted providers list,
 * we need to filter the HTML heavily for security.
 *
 * Only filters 'rich' and 'video' response types.
 *
 * @since 4.4.0
 *
 * @param string $result The oEmbed HTML result.
 * @param object $data   A data object result from an oEmbed provider.
 * @param string $url    The URL of the content to be embedded.
 * @return string The filtered and sanitized oEmbed result.
 */
    public function wpFilterOembedResult(string $result, object $data, string $url): string;
}
