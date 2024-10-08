<?php

namespace WpService\Contracts;

interface WpKsesBadProtocolOnce
{
    /**
 * Sanitizes content from bad protocols and other characters.
 *
 * This function searches for URL protocols at the beginning of the string, while
 * handling whitespace and HTML entities.
 *
 * @since 1.0.0
 *
 * @param string $content           Content to check for bad protocols.
 * @param string[] $allowedProtocols Array of allowed URL protocols.
 * @param int $count             Depth of call recursion to this function.
 * @return string Sanitized content.
 */
    public function wpKsesBadProtocolOnce(string $content, array $allowedProtocols, int $count): string;
}
