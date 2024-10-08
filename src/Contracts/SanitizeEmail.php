<?php

namespace WpService\Contracts;

interface SanitizeEmail
{
    /**
 * Strips out all characters that are not allowable in an email.
 *
 * @since 1.5.0
 *
 * @param string $email Email address to filter.
 * @return string Filtered email address.
 */
    public function sanitizeEmail(string $email): string;
}
