<?php

namespace WpService\Contracts;

interface WpPreKsesBlockAttributes
{
/**
 * Removes non-allowable HTML from parsed block attribute values when filtering
 * in the post context.
 *
 * @since 5.3.1
 *
 * @param string $content           Content to be run through KSES.
 * @param array[]|string $allowedHtml      An array of allowed HTML elements
 *                                          and attributes, or a context name
 *                                          such as 'post'.
 * @param string[] $allowedProtocols Array of allowed URL protocols.
 * @return string Filtered text to run through KSES.
 */
    public function wpPreKsesBlockAttributes(string $content, array|string $allowedHtml, array $allowedProtocols): string;
}
