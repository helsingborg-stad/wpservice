<?php

namespace WpService\Contracts;

interface WpFilterOembedIframeTitleAttribute
{
/**
 * Filters the given oEmbed HTML to make sure iframes have a title attribute.
 *
 * @since 5.2.0
 *
 * @param string|false $result The oEmbed HTML result.
 * @param object $data   A data object result from an oEmbed provider.
 * @param string $url    The URL of the content to be embedded.
 * @return string|false The filtered oEmbed result.
 */
    public function wpFilterOembedIframeTitleAttribute(string|false $result, object $data, string $url): string|false;
}
