<?php

namespace WpService\Contracts;

interface IsUserLoggedIn
{
/**
 * Determines whether the current visitor is a logged in user.
 *
 * For more information on this and similar theme functions, check out
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
 * Conditional Tags} article in the Theme Developer Handbook.
 *
 * @since 2.0.0
 *
 * @return bool True if user is logged in, false if not logged in.
 */
    public function isUserLoggedIn(): bool;
}
