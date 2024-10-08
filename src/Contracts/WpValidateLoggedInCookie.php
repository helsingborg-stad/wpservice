<?php

namespace WpService\Contracts;

interface WpValidateLoggedInCookie
{
    /**
 * Validates the logged-in cookie.
 *
 * Checks the logged-in cookie if the previous auth cookie could not be
 * validated and parsed.
 *
 * This is a callback for the {@see 'determine_current_user'} filter, rather than API.
 *
 * @since 3.9.0
 *
 * @param int|false $userId The user ID (or false) as received from
 *                           the `determine_current_user` filter.
 * @return int|false User ID if validated, false otherwise. If a user ID from
 *                   an earlier filter callback is received, that value is returned.
 */
    public function wpValidateLoggedInCookie(int|false $userId): int|false;
}
