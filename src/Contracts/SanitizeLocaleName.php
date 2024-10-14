<?php

namespace WpService\Contracts;

interface SanitizeLocaleName
{
/**
 * Strips out all characters not allowed in a locale name.
 *
 * @since 6.2.1
 *
 * @param string $localeName The locale name to be sanitized.
 * @return string The sanitized value.
 */
    public function sanitizeLocaleName(string $localeName): string;
}
