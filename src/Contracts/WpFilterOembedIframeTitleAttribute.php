<?php

namespace WpService\Contracts;

interface WpFilterOembedIframeTitleAttribute
{
    /**
     * Filters the given oEmbed HTML to make sure iframes have a title attribute.
     *
     * @since 5.2.0
     *
     * @param string $result The oEmbed HTML result.
     * @param object $data   A data object result from an oEmbed provider.
     * @param string $url    The URL of the content to be embedded.
     * @return string The filtered oEmbed result.
     */
    public function wpFilterOembedIframeTitleAttribute(string $result, object $data, string $url): string;
}
