<?php

namespace WpService\Contracts;

interface WpSetAuthCookie
{
/**
 * Sets the authentication cookies for a given user ID.
 *
 * The `$remember` parameter controls cookie persistence:
 * - If true, the cookie is persistent (default 14 days, filterable via {@see 'auth_cookie_expiration'}).
 * - If false, the cookie is a browser session cookie (expires when the browser closes).
 *   Internally, {@see 'auth_cookie_expiration'} is still applied, to expire the login after
 *   two days or when the browser is closed, whichever occurs first.
 *
 * @since 2.5.0
 * @since 4.3.0 Added the `$token` parameter.
 *
 * @param int $userId  User ID.
 * @param bool $remember Whether to remember the user.
 * @param bool|string $secure   Whether the auth cookie should only be sent over HTTPS. Default is an empty
 *                              string which means the value of `is_ssl()` will be used.
 * @param string $token    Optional. User's session token to use for this cookie.
 */
    public function wpSetAuthCookie(int $userId, bool $remember = false, bool|string $secure = '', string $token = ''): void;
}
