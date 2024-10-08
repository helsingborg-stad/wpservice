<?php

namespace WpService\Contracts;

interface WpKsesBadProtocolOnce2
{
    /**
 * Callback for `wp_kses_bad_protocol_once()` regular expression.
 *
 * This function processes URL protocols, checks to see if they're in the
 * list of allowed protocols or not, and returns different data depending
 * on the answer.
 *
 * @access private
 * @ignore
 * @since 1.0.0
 *
 * @param string $scheme            URI scheme to check against the list of allowed protocols.
 * @param string[] $allowedProtocols Array of allowed URL protocols.
 * @return string Sanitized content.
 */
    public function wpKsesBadProtocolOnce2(string $scheme, array $allowedProtocols): string;
}
