<?php

namespace WpService\Contracts;

interface SanitizeTitleWithDashes
{
    /**
 * Sanitizes a title, replacing whitespace and a few other characters with dashes.
 *
 * Limits the output to alphanumeric characters, underscore (_) and dash (-).
 * Whitespace becomes a dash.
 *
 * @since 1.2.0
 *
 * @param string $title     The title to be sanitized.
 * @param string $rawTitle Optional. Not used. Default empty.
 * @param string $context   Optional. The operation for which the string is sanitized.
 *                          When set to 'save', additional entities are converted to hyphens
 *                          or stripped entirely. Default 'display'.
 * @return string The sanitized title.
 */
    public function sanitizeTitleWithDashes(string $title, string $rawTitle = '', string $context = 'display'): string;
}
