<?php

namespace WpService\Contracts;

interface WpKsesSplit
{
/**
 * Searches for HTML tags, no matter how malformed.
 *
 * It also matches stray `>` characters.
 *
 * @since 1.0.0
 * @since 6.6.0 Recognize additional forms of invalid HTML which convert into comments.
 *
 * @global array[]|string $pass_allowed_html      An array of allowed HTML elements and attributes,
 *                                                or a context name such as 'post'.
 * @global string[]       $pass_allowed_protocols Array of allowed URL protocols.
 *
 * @param string $content           Content to filter.
 * @param array[]|string $allowedHtml      An array of allowed HTML elements and attributes,
 *                                          or a context name such as 'post'. See wp_kses_allowed_html()
 *                                          for the list of accepted context names.
 * @param string[] $allowedProtocols Array of allowed URL protocols.
 * @return string Content with fixed HTML tags
 */
    public function wpKsesSplit(string $content, array|string $allowedHtml, array $allowedProtocols): string;
}
