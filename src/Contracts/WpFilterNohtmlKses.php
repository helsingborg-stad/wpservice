<?php

namespace WpService\Contracts;

interface WpFilterNohtmlKses
{
    /**
 * Strips all HTML from a text string.
 *
 * This function expects slashed data.
 *
 * @since 2.1.0
 *
 * @param string $data Content to strip all HTML from.
 * @return string Filtered content without any HTML.
 */
    public function wpFilterNohtmlKses(string $data): string;
}
