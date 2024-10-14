<?php

namespace WpService\Contracts;

interface WpReplaceInHtmlTags
{
/**
 * Replaces characters or phrases within HTML elements only.
 *
 * @since 4.2.3
 *
 * @param string $haystack      The text which has to be formatted.
 * @param array $replacePairs In the form array('from' => 'to', ...).
 * @return string The formatted text.
 */
    public function wpReplaceInHtmlTags(string $haystack, array $replacePairs): string;
}
