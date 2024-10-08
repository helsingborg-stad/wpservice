<?php

namespace WpService\Contracts;

interface WpExtractUrls
{
    /**
     * Uses RegEx to extract URLs from arbitrary content.
     *
     * @since 3.7.0
     * @since 6.0.0 Fixes support for HTML entities (Trac 30580).
     *
     * @param string $content Content to extract URLs from.
     * @return string[] Array of URLs found in passed string.
     */
    public function wpExtractUrls(string $content): array;
}
