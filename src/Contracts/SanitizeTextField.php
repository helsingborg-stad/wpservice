<?php

namespace WpService\Contracts;

interface SanitizeTextField
{
/**
 * Sanitizes a string from user input or from the database.
 *
 * - Checks for invalid UTF-8,
 * - Converts single `<` characters to entities
 * - Strips all tags
 * - Removes line breaks, tabs, and extra whitespace
 * - Strips percent-encoded characters
 *
 * @since 2.9.0
 *
 * @see sanitize_textarea_field()
 * @see wp_check_invalid_utf8()
 * @see wp_strip_all_tags()
 *
 * @param string $str String to sanitize.
 * @return string Sanitized string.
 */
    public function sanitizeTextField(string $str): string;
}
