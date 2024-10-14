<?php

namespace WpService\Contracts;

interface WpKses
{
/**
 * Filters text content and strips out disallowed HTML.
 *
 * This function makes sure that only the allowed HTML element names, attribute
 * names, attribute values, and HTML entities will occur in the given text string.
 *
 * This function expects unslashed data.
 *
 * @see wp_kses_post() for specifically filtering post content and fields.
 * @see wp_allowed_protocols() for the default allowed protocols in link URLs.
 *
 * @since 1.0.0
 *
 * @param string $content           Text content to filter.
 * @param array[]|string $allowedHtml      An array of allowed HTML elements and attributes,
 *                                          or a context name such as 'post'. See wp_kses_allowed_html()
 *                                          for the list of accepted context names.
 * @param string[] $allowedProtocols Optional. Array of allowed URL protocols.
 *                                          Defaults to the result of wp_allowed_protocols().
 * @return string Filtered content containing only the allowed HTML.
 */
    public function wpKses(string $content, array|string $allowedHtml, array $allowedProtocols = []): string;
}
