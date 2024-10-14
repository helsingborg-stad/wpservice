<?php

namespace WpService\Contracts;

interface SanitizeUser
{
/**
 * Sanitizes a username, stripping out unsafe characters.
 *
 * Removes tags, percent-encoded characters, HTML entities, and if strict is enabled,
 * will only keep alphanumeric, _, space, ., -, @. After sanitizing, it passes the username,
 * raw username (the username in the parameter), and the value of $strict as parameters
 * for the {@see 'sanitize_user'} filter.
 *
 * @since 2.0.0
 *
 * @param string $username The username to be sanitized.
 * @param bool $strict   Optional. If set to true, limits $username to specific characters.
 *                         Default false.
 * @return string The sanitized username, after passing through filters.
 */
    public function sanitizeUser(string $username, bool $strict = false): string;
}
