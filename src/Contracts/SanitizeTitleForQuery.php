<?php

namespace WpService\Contracts;

interface SanitizeTitleForQuery
{
    /**
     * Sanitizes a title with the 'query' context.
     *
     * Used for querying the database for a value from URL.
     *
     * @since 3.1.0
     *
     * @param string $title The string to be sanitized.
     * @return string The sanitized string.
     */
    public function sanitizeTitleForQuery(string $title): string;
}
