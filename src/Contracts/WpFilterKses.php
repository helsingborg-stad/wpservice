<?php

namespace WpService\Contracts;

interface WpFilterKses
{
    /**
 * Sanitize content with allowed HTML KSES rules.
 *
 * This function expects slashed data.
 *
 * @since 1.0.0
 *
 * @param string $data Content to filter, expected to be escaped with slashes.
 * @return string Filtered content.
 */
    public function wpFilterKses(string $data): string;
}
