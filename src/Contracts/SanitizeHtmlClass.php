<?php

namespace WpService\Contracts;

interface SanitizeHtmlClass
{
    /**
 * Sanitizes an HTML classname to ensure it only contains valid characters.
 *
 * Strips the string down to A-Z,a-z,0-9,_,-. If this results in an empty
 * string then it will return the alternative value supplied.
 *
 * @todo Expand to support the full range of CDATA that a class attribute can contain.
 *
 * @since 2.8.0
 *
 * @param string $classname The classname to be sanitized.
 * @param string $fallback  Optional. The value to return if the sanitization ends up as an empty string.
 *                          Default empty string.
 * @return string The sanitized value.
 */
    public function sanitizeHtmlClass(string $classname, string $fallback): string;
}
