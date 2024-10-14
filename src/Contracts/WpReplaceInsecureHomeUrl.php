<?php

namespace WpService\Contracts;

interface WpReplaceInsecureHomeUrl
{
/**
 * Replaces insecure HTTP URLs to the site in the given content, if configured to do so.
 *
 * This function replaces all occurrences of the HTTP version of the site's URL with its HTTPS counterpart, if
 * determined via {@see wp_should_replace_insecure_home_url()}.
 *
 * @since 5.7.0
 *
 * @param string $content Content to replace URLs in.
 * @return string Filtered content.
 */
    public function wpReplaceInsecureHomeUrl(string $content): string;
}
