<?php

namespace WpService\Contracts;

interface UsernameExists
{
    /**
     * Determines whether the given username exists.
     *
     * For more information on this and similar theme functions, check out
     * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
     * Conditional Tags} article in the Theme Developer Handbook.
     *
     * @since 2.0.0
     *
     * @param string $username The username to check for existence.
     * @return int|false The user ID on success, false on failure.
     */
    public function usernameExists(string $username): int|false;
}
