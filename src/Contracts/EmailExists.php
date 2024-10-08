<?php

namespace WpService\Contracts;

interface EmailExists
{
    /**
 * Determines whether the given email exists.
 *
 * For more information on this and similar theme functions, check out
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
 * Conditional Tags} article in the Theme Developer Handbook.
 *
 * @since 2.1.0
 *
 * @param string $email The email to check for existence.
 * @return int|false The user ID on success, false on failure.
 */
    public function emailExists(string $email): int|false;
}
